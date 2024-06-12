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
}
