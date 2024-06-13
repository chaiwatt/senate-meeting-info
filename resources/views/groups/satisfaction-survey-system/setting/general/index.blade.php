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
                    <h3 class="m-0">ตั้งค่า</h3>
                </div>
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}">หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item active">ตั้งค่า</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content">
        
        <div class="container-fluid">
            @if ($permission->show)
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="m-0">ตั้งค่าระบบสำรวจความพึงพอใจ</h4>
                          
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 " id="table_container">
                                    <div class="table-responsive">
                                       ตัวอย่าง route หน้าตั้งค่าระบบสำรวจความพึงพอใจ
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
