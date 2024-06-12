@extends('layouts.setting-dashboard')

@section('content')

<div>
    <div>
        <div class="container-fluid">
            <div class="title-header">
                <div>
                    <h3 class="m-0">ฟิลเตอร์การค้นหา</h3>
                </div>
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">ฟิลเตอร์การค้นหา</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-3">
                    <div class="card border-0 rounded-4">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12 dashboard-chart-table px-4">
                                    <div class="table-responsive">
                                        <table class="table table-borderless border-bottom">
                                            <thead class="border-bottom">
                                                <tr>
                                                    <th style="width:100px">สถานะ</th>
                                                    <th>ตาราง</th>
                                                    <th>ฟิลด์ข้อมูล</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td> <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="chk_users_name" checked>
                                                  </div></td>
                                                <td>users</td>
                                                <td>name</td>
                                              </tr>
                                              <tr>
                                                <td> <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="chk_users_lastname" checked>
                                                  </div></td>
                                                <td>users</td>
                                                <td>lastname</td>
                                              </tr>
                                              <tr>
                                                <td> <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="chk_users_email" checked>
                                                  </div></td>
                                                <td>users</td>
                                                <td>email</td>
                                              </tr>
                                              <tr>
                                                <td> <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="chk_users_role" checked>
                                                  </div></td>
                                                <td>users</td>
                                                <td>role</td>
                                              </tr>
                                              <tr>
                                                <td> <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="chk_unit_tests_name" checked>
                                                  </div></td>
                                                <td>unit_tests</td>
                                                <td>name</td>
                                              </tr>
                                              <tr>
                                                <td> <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="chk_unit_tests_description" checked>
                                                  </div></td>
                                                <td>unit_tests</td>
                                                <td>description</td>
                                              </tr>
                                              <tr>
                                                <td> <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="chk_unit_tests_user" checked>
                                                  </div></td>
                                                <td>unit_tests</td>
                                                <td>user</td>
                                              </tr>
                                              <tr>
                                                <td> <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="chk_unit_tests_experts" checked>
                                                  </div></td>
                                                <td>unit_tests</td>
                                                <td>experts</td>
                                              </tr>
                                              <tr>
                                                <td> <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="chk_unit_tests_criterias" checked>
                                                  </div></td>
                                                <td>unit_tests</td>
                                                <td>criterias</td>
                                              </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')


@endpush
@endsection