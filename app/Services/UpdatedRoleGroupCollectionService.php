<?php
namespace App\Services;

use App\Models\Menu;
use App\Models\Group;
use App\Models\Module;
use App\Models\RoleGroupJson;
use App\Services\AccessGroupService;
use Illuminate\Support\Facades\Route;

class UpdatedRoleGroupCollectionService
{
    private $accessGroupService;

    public function __construct(AccessGroupService $accessGroupService)
    {
        $this->accessGroupService = $accessGroupService;
    }
    public function getUpdatedRoleGroupCollection($action)
    {
        $user = auth()->user();
        
        $filterRoute = $this->filterRoute(Route::currentRouteName());
        $menu = Menu::where('route', $filterRoute)->first();
       
        $groupId = $menu->group_module_menu->group_id;
        
        $moduleId = $menu->group_module_menu->module_id;
        $viewName = $menu->view;
        $viewRoute = $menu->route;

        $group = Group::findOrFail($groupId);
        $module = Module::findOrFail($moduleId);

        $this->accessGroupService->hasAccess($user, $group);
        $updatedRoleGroupCollection = $this->getRoleGroupJson($user, $group);

        $permission = $this->accessGroupService->hasPermission($updatedRoleGroupCollection, $module, $menu, $action);

        return [
            'updatedRoleGroupCollection' => $updatedRoleGroupCollection,
            'permission' => $permission,
            'viewName' => $viewName,
            'viewRoute' => $viewRoute,
        ];
    }

    public function filterRoute($route)
    {
        $parts = explode('.', $route);
        return implode('.', array_slice($parts, 0, 4));
    }

    public function getRoleGroupJson($user, $group)
    {
        $role = $user->roles->first();
        $roleGroupJson = json_decode(RoleGroupJson::where('role_id', $role->id)->where('group_id', $group->id)->first()->json);
        $roleGroupCollection = collect($roleGroupJson);
        $updatedRoleGroupCollection = $roleGroupCollection
            ->filter(function ($module) {
                return $module->enable === true || $module->enable === "true";
            })
            ->map(function ($module) {
                $module->menus = collect($module->menus)->map(function ($menu) {
                    $menuModel = Menu::find($menu->menu_id);
                    $menu->menu_view = $menuModel->view;
                    $menu->menu_route = $menuModel->route;
                    return $menu;
                });

                $moduleModel = Module::find($module->module_id);
                $module->module_icon = $moduleModel->icon;
                $module->module_prefix = $moduleModel->prefix;
                return $module;
            });

        return $updatedRoleGroupCollection;
    }
}
