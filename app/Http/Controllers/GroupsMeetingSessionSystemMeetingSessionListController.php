<?php

namespace App\Http\Controllers;

use App\Models\Toxin;
use App\Models\Prefix;
use App\Models\Province;
use App\Models\CheckPoint;
use App\Models\MeetingSession;
use App\Models\MeetingSessionType;
use App\Models\ToxinLimit;
use App\Models\Prohibition;
use App\Models\VihicleType;
use Illuminate\Http\Request;
use App\Models\ProhibitionType;
use App\Models\ProhibitionStatus;

use Illuminate\Support\Facades\Auth;
use App\Services\UpdatedRoleGroupCollectionService;

class GroupsMeetingSessionSystemMeetingSessionListController extends Controller
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
        $meetingSessions = MeetingSession::all();
        

        return view($viewName, [
            'groupUrl' => $groupUrl,
            'modules' => $updatedRoleGroupCollection,
            'permission' => $permission,
            'meetingSessions' => $meetingSessions,
       ]);
    }

    public function create()
    {
        $action = 'create';
        $groupUrl = strval(session('groupUrl'));
        $roleGroupCollection = $this->updatedRoleGroupCollectionService->getUpdatedRoleGroupCollection($action);
        $updatedRoleGroupCollection = $roleGroupCollection['updatedRoleGroupCollection'];
        $permission = $roleGroupCollection['permission'];
        $viewName = $roleGroupCollection['viewName'];
        $meetingSedssionTypes = MeetingSessionType::all();
        $createView = str_replace('.index', '.create', $viewName);

        return view($createView, [
            'groupUrl' => $groupUrl,
            'modules' => $updatedRoleGroupCollection,
            'permission' => $permission,
            'meetingSedssionTypes' => $meetingSedssionTypes

       ]); 
    }
}
