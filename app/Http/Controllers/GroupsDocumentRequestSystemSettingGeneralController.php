<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UpdatedRoleGroupCollectionService;

class GroupsDocumentRequestSystemSettingGeneralController extends Controller
{
    private $updatedRoleGroupCollectionService;


    public function __construct(UpdatedRoleGroupCollectionService $updatedRoleGroupCollectionService)
    {
        $this->updatedRoleGroupCollectionService = $updatedRoleGroupCollectionService;
    }

    public function index()
    {
        $action = 'show';
        $groupUrl = strval(session('groupUrl'));
        $roleGroupCollection = $this->updatedRoleGroupCollectionService->getUpdatedRoleGroupCollection($action);
        $updatedRoleGroupCollection = $roleGroupCollection['updatedRoleGroupCollection'];
        $permission = $roleGroupCollection['permission'];
        $viewName = $roleGroupCollection['viewName'];

        return view($viewName, [
            'groupUrl' => $groupUrl,
            'modules' => $updatedRoleGroupCollection,
            'permission' => $permission
       ]);
    }
}
