<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SettingUserController;
use App\Http\Controllers\SettingGeneralController;
use App\Http\Controllers\SettingAccessRoleController;
use App\Http\Controllers\SettingGeneralToxinController;
use App\Http\Controllers\SettingGeneralPcdInfoController;
use App\Http\Controllers\SettingGeneralCheckPointController;
use App\Http\Controllers\SettingGeneralToxinLimitController;
use App\Http\Controllers\SettingGeneralVihicleTypeController;
use App\Http\Controllers\SettingGeneralOrganizationController;
use App\Http\Controllers\SettingGeneralUserPositionController;
use App\Http\Controllers\SettingAccessAssignmentRoleController;
use App\Http\Controllers\GroupsReportSystemReportListController;
use App\Http\Controllers\SettingGeneralFixingIntervalController;
use App\Http\Controllers\GroupsReportSystemSettingGeneralController;
use App\Http\Controllers\SettingAccessAssignmentCheckPointController;

use App\Http\Controllers\SettingAccessAssignmentGroupModuleController;
use App\Http\Controllers\GroupsDocumentRequestSystemReportListController;
use App\Http\Controllers\GroupsMeetingSessionSystemSettingGeneralController;
use App\Http\Controllers\GroupsDocumentRequestSystemSettingGeneralController;
use App\Http\Controllers\GroupsMeetingSessionSystemMeetingSessionListController;
use App\Http\Controllers\GroupsSatisfactionSurveySystemSettingGeneralController;
use App\Http\Controllers\GroupsDocumentRequestSystemDocumentRequestListController;
use App\Http\Controllers\GroupsSatisfactionSurveySystemSatisfactionSurveyListController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::group(['prefix' => 'setting', 'middleware' => 'admin'], function () {
        Route::get('', [SettingController::class, 'index'])->name('setting');
        Route::group(['prefix' => 'user'], function () {
            Route::get('', [SettingUserController::class, 'index'])->name('setting.user');
            Route::get('create', [SettingUserController::class, 'create'])->name('setting.user.create');
            Route::get('import', [SettingUserController::class, 'import'])->name('setting.user.import');
            Route::post('store', [SettingUserController::class, 'store'])->name('setting.user.store');
            Route::get('{id}', [SettingUserController::class, 'view'])->name('setting.user.view');
            Route::put('{id}', [SettingUserController::class, 'update'])->name('setting.user.update');
            Route::delete('{id}', [SettingUserController::class, 'delete'])->name('setting.user.delete');
        });
        Route::group(['prefix' => 'general'], function () {
            // Route::get('search-filter', [SettingGeneralController::class, 'searchFilter'])->name('setting.search-filter');
        });
    });
    Route::group(['prefix' => 'access'], function () {
        Route::group(['prefix' => 'role'], function () {
            Route::get('', [SettingAccessRoleController::class, 'index'])->name('setting.access.role');
            Route::get('create', [SettingAccessRoleController::class, 'create'])->name('setting.access.role.create');
            Route::post('store', [SettingAccessRoleController::class, 'store'])->name('setting.access.role.store');
            Route::get('{id}', [SettingAccessRoleController::class, 'view'])->name('setting.access.role.view');
            Route::put('{id}', [SettingAccessRoleController::class, 'update'])->name('setting.access.role.update');
            Route::delete('{id}', [SettingAccessRoleController::class, 'delete'])->name('setting.access.role.delete');
        });
        Route::group(['prefix' => 'assignment'], function () {
            Route::group(['prefix' => 'group-module'], function () {
                Route::get('{id}', [SettingAccessAssignmentGroupModuleController::class, 'view'])->name('setting.access.assignment.group-module.view');
                Route::post('store', [SettingAccessAssignmentGroupModuleController::class, 'store'])->name('setting.access.assignment.group-module.store');
                Route::delete('roles/{roleId}/groups/{groupId}/delete', [SettingAccessAssignmentGroupModuleController::class, 'delete'])->name('setting.access.assignment.group-module.delete');
                Route::post('update-module-json', [SettingAccessAssignmentGroupModuleController::class, 'updateModuleJson'])->name('setting.access.assignment.group-module.update-module-json');
            });
            Route::group(['prefix' => 'role'], function () {
                Route::post('store', [SettingAccessAssignmentRoleController::class, 'store'])->name('setting.access.assignment.role.store');
                Route::get('roles/{roleId}/users/{userId}/delete', [SettingAccessAssignmentRoleController::class, 'delete'])->name('setting.access.assignment.role.delete');
            });
        });
    });

    Route::group(['prefix' => 'api'], function () {
        Route::get('get-group', [ApiController::class, 'getGroup'])->name('api.get-group');
        Route::get('get-check-point', [ApiController::class, 'getCheckPoint'])->name('api.get-check-point');
        Route::post('get-module-json', [ApiController::class, 'getModuleJson'])->name('api.get-module-json');
        Route::get('get-user', [ApiController::class, 'getUser'])->name('api.get-user');
    });

    Route::group(['prefix' => 'group'], function () {
        Route::group(['prefix' => 'meeting-session-system'], function () {
            Route::group(['prefix' => 'meeting-session'], function () {
                Route::group(['prefix' => 'list'], function () {
                    Route::get('', [GroupsMeetingSessionSystemMeetingSessionListController::class,'index'])->name('groups.meeting-session-system.meeting-session.list');
                    Route::get('create', [GroupsMeetingSessionSystemMeetingSessionListController::class,'create'])->name('groups.meeting-session-system.meeting-session.list.create');
                });
            });
            Route::group(['prefix' => 'setting'], function () {
                Route::group(['prefix' => 'general'], function () {
                    Route::get('', [GroupsMeetingSessionSystemSettingGeneralController::class,'index'])->name('groups.meeting-session-system.setting.general');
                });
            });
        });

        Route::group(['prefix' => 'document-request-system'], function () {
            Route::group(['prefix' => 'document-request'], function () {
                Route::group(['prefix' => 'list'], function () {
                    Route::get('', [GroupsDocumentRequestSystemDocumentRequestListController::class,'index'])->name('groups.document-request-system.document-request.list');
                });
            });
            Route::group(['prefix' => 'setting'], function () {
                Route::group(['prefix' => 'general'], function () {
                    Route::get('', [GroupsDocumentRequestSystemSettingGeneralController::class,'index'])->name('groups.document-request-system.setting.general');
                });
            });
        });

        Route::group(['prefix' => 'satisfaction-survey-system'], function () {
            Route::group(['prefix' => 'satisfaction-survey'], function () {
                Route::group(['prefix' => 'list'], function () {
                    Route::get('', [GroupsSatisfactionSurveySystemSatisfactionSurveyListController::class,'index'])->name('groups.satisfaction-survey-system.satisfaction-survey.list');
                });
            });
            Route::group(['prefix' => 'setting'], function () {
                Route::group(['prefix' => 'general'], function () {
                    Route::get('', [GroupsSatisfactionSurveySystemSettingGeneralController::class,'index'])->name('groups.satisfaction-survey-system.setting.general');
                });
            });
        });

        Route::group(['prefix' => 'report-system'], function () {
            Route::group(['prefix' => 'report'], function () {
                Route::group(['prefix' => 'list'], function () {
                    Route::get('', [GroupsReportSystemReportListController::class,'index'])->name('groups.report-system.report.list');
                });
            });
            Route::group(['prefix' => 'setting'], function () {
                Route::group(['prefix' => 'general'], function () {
                    Route::get('', [GroupsReportSystemSettingGeneralController::class,'index'])->name('groups.report-system.setting.general');
                });
            });
        });
    });
});
