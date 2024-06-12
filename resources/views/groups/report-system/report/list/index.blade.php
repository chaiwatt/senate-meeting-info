@extends('layouts.dashboard')

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/loading.css?v=1.0') }}">
@endpush
<div>
    @include('layouts.partial.loading')
    <div>
        @if ($errors->any())
            <div class="alert alert-danger m-4">
                <ul>
                    @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container-fluid">
            <div class="title-header">
                <div>
                    <h3 class="m-0">รายงาน</h3>
                </div>
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}">หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item active">รายงาน</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content">
        
        <div class="container-fluid">
            @if ($permission->show)

            <div class="row px-2">
                <div class="col-lg-3 col-sm-6 col-12 px-2 mb-3">
                    <div class="d-flex gap-4 p-4 rounded-4" style="background: #F9FAFB">
                        <span class="material-symbols-outlined text-white rounded-circle d-flex justify-content-center align-items-center" style="background: #3538CD; font-size: 36px; width: 64px; height: 64px;">
                            manage_accounts
                        </span>
                        <div class="d-flex flex-column justify-content-between">
                            <span>คพ.3</span>
                            <h2 class="m-0">1</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 px-2 mb-3">
                    <div class="d-flex gap-4 p-4 rounded-4" style="background: #F9FAFB">
                        <span class="material-symbols-outlined text-white rounded-circle d-flex justify-content-center align-items-center" style="background: #47CA88; font-size: 36px; width: 64px; height: 64px;">
                            person
                        </span>
                        <div class="d-flex flex-column justify-content-between">
                            <span>คพ.4</span>
                            <h2 class="m-0">0</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 px-2 mb-3">
                    <div class="d-flex gap-4 p-4 rounded-4" style="background: #F9FAFB">
                        <span class="material-symbols-outlined text-white rounded-circle d-flex justify-content-center align-items-center" style="background: #47CA88; font-size: 36px; width: 64px; height: 64px;">
                            person
                        </span>
                        <div class="d-flex flex-column justify-content-between">
                            <span>คพ.5</span>
                            <h2 class="m-0">0</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 px-2 mb-3">
                    <div class="d-flex gap-4 p-4 rounded-4" style="background: #F9FAFB">
                        <span class="material-symbols-outlined text-white rounded-circle d-flex justify-content-center align-items-center" style="background: #47CA88; font-size: 36px; width: 64px; height: 64px;">
                            person
                        </span>
                        <div class="d-flex flex-column justify-content-between">
                            <span>คพ.6</span>
                            <h2 class="m-0">0</h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="m-0">รายการคำสั่ง</h4>
                            <div class="d-flex gap-3">
                               
                                <div class="card-tools search">
                                    <input type="text" name="search_query" id="search_query" class="form-control" placeholder="ค้นหา...">
                                    <label for="search_query">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0833 4.39585C6.66608 4.39585 3.89584 7.16609 3.89584 10.5834C3.89584 14.0006 6.66608 16.7709 10.0833 16.7709C11.7446 16.7709 13.2529 16.1162 14.3644 15.0507C14.3915 15.0167 14.4208 14.9838 14.4523 14.9523C14.4838 14.9208 14.5167 14.8915 14.5507 14.8644C15.6162 13.7529 16.2708 12.2446 16.2708 10.5834C16.2708 7.16609 13.5006 4.39585 10.0833 4.39585ZM16.8346 15.7141C17.9188 14.2897 18.5625 12.5117 18.5625 10.5834C18.5625 5.90044 14.7663 2.10419 10.0833 2.10419C5.40042 2.10419 1.60417 5.90044 1.60417 10.5834C1.60417 15.2663 5.40042 19.0625 10.0833 19.0625C12.0117 19.0625 13.7896 18.4188 15.2141 17.3346L18.4398 20.5602C18.8873 21.0077 19.6128 21.0077 20.0602 20.5602C20.5077 20.1128 20.5077 19.3873 20.0602 18.9398L16.8346 15.7141Z" fill="#475467"></path>
                                          </svg>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 " id="table_container">
                                    <div class="table-responsive">
                                        <table class="table table-borderless text-nowrap dataTable dtr-inline">
                                            <thead class="border-bottom">
                                                <tr>
                                                    <th>วันที่ออกคำสั่ง</th>
                                                    <th>สถานที่ปฏิบัติงาน</th>
                                                    <th>คำสั่ง</th>
                                                    <th>แบบคำสั่ง</th>
                                                    <th class="text-center">วันอนุโลมคงเหลือ</th>
                                                    <th>ยานพาหนะ</th>
                                                    <th>ยี่ห้อ</th>
                                                    <th>เลขทะเบียนอนุญาต</th>
                                                    <th class="text-end" style="width: 120px">สถานะ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($prohibitions as $prohibition)
                                                  <tr>
                                                    <td>{{$prohibition->issue_date}}</td>
                                                    <td>{{$prohibition->checkPoint->name}}</td>
                                                    <td>{{$prohibition->prohibitionType->name}}</td>
                                                    <td>{{$prohibition->prohibitionStatus->name}}</td>
                                                    <td class="text-center">{{$prohibition->dayRemain}}</td>
                                                    <td>{{$prohibition->vihicleType->name}}</td>
                                                    <td>{{$prohibition->vihicle->brand}}</td>
                                                    <td>{{$prohibition->vihicle->license_plate}} {{$prohibition->vihicle->province->name}}</td>
                                                    <td>{{$prohibition->prohibitionType->name}}</td>
                                                  </tr>
                                              @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @endif

        </div>
    </div>

</div>

@endsection
