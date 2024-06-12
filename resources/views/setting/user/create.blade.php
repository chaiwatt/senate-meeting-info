@extends('layouts.setting-dashboard')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger m-4">
        <ul>
            @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div>
    <div>
        <div class="container-fluid">
            <div class="title-header">
                <div>
                    <h3 class="m-0">เพิ่มผู้ใช้งาน</h3>
                </div>
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">เพิ่มผู้ใช้งาน</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 rounded-4">
                        <div class="py-3 px-4">
                            <h4 class="m-0">ข้อมูลส่วนบุคคล</h4>
                        </div>
                        <form action="{{route('setting.user.store')}}" method="POST" enctype="multipart/form-data">
                        {{-- <form action="" method="POST" enctype="multipart/form-data"> --}}
                            @csrf
                            <!-- Display validation errors -->
                            <div class="card-body">
                             
                                <div class="row gy-3">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>คำนำหน้า</label>
                                            <select name="prefix"
                                                class="form-control select2"
                                                style="width: 100%;">
                                                @foreach ($prefixes as $prefix)
                                                    <option value="{{$prefix->id}}">{{$prefix->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ชื่อ <span class="fw-bold text-danger">*</span></label>
                                            <input type="text" name="name" value="{{old('name')}}"
                                                class="form-control @error('name') is-invalid @enderror">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>นามสกุล <span class="fw-bold text-danger">*</span></label>
                                            <input type="text" name="lastname" value="{{old('lastname')}}"
                                                class="form-control @error('lastname') is-invalid @enderror">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>อีเมล <span class="fw-bold text-danger">*</span></label>
                                            <input type="email" name="email" value="{{old('email')}}"
                                                class="form-control @error('email') is-invalid @enderror">
                                        </div>
                                    </div>



                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>บทบาทหลัก</label>
                                            <select name="is_admin"
                                                class="form-control select2"
                                                style="width: 100%;">

                                               
                                                <option value="1">ผู้ดูแลระบบ</option>
                                                <option value="{{null}}">ผู้ใช้อื่น</option>
                                            
                                             
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mt-3">
                                        <button type="submit" class="btn btn-success">บันทึก</button>
                                    </div>
                                    
                                </div>
                                
                            </div>
        
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script src="{{asset('assets/js/helpers/helper.js?v=1')}}"></script>
<script>
    $(function () {
        $('.select2').select2()
        $('#birth_date,#start_work_date,#visa_expire_date,#work_permit_expire_date').datetimepicker({
            format: 'L'
        });
    });
    const avatar = document.getElementById('avatar-input');
    const avatarPreview = document.getElementById('avatar-preview');
    avatar.onchange = (event) => {
        avatarPreview.src = URL.createObjectURL(event.target.files[0]);
        avatarPreview.style = 'width: 100%; height: 100%; object-fit: cover;'
    }
  
</script>
@endpush
@endsection
