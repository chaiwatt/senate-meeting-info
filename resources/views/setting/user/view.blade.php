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
                        <form action="{{route('setting.user.update',['id' => $user->id])}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <!-- Display validation errors -->
                            <div class="card-body">
                                <div class="row gy-3 mt-5">
                                    <div class="col-12 position-relative">
                                   
                                        <input type="file" name="avatar" id="avatar-input" accept="image/png, image/jpg, image/jpeg, image/gif" class="form-control" hidden>
                                        <label for="avatar-input">
                                            <div class="d-flex flex-column rounded-4 overflow-hidden position-absolute bottom-0 end-0" style="width: 124px; height: 124px;">
                                                <div class="d-flex justify-content-center align-items-center " style="background: #667085; flex: 1;">
                                                    <img src="{{ asset('icon _user_.png') }}" alt="avatar-preview" id="avatar-preview">
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center" style="height: 30px; background: #D0D5DD;">
                                                    <p class="m-0 text-decoration-underline">เพิ่มรูปภาพ</p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                    <div class="row gy-3">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ชื่อ <span class="fw-bold text-danger">*</span></label>
                                            <input type="text" name="name" value="{{$user->name}}"
                                                class="form-control @error('name') is-invalid @enderror">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>นามสกุล <span class="fw-bold text-danger">*</span></label>
                                            <input type="text" name="lastname" value="{{$user->lastname}}"
                                                class="form-control @error('lastname') is-invalid @enderror">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>อีเมล <span class="fw-bold text-danger">*</span></label>
                                            <input type="email" name="email" value="{{$user->email}}"
                                                class="form-control @error('email') is-invalid @enderror">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>บทบาทหลัก</label>
                                            <select name="main_role"
                                                class="form-control select2"
                                                style="width: 100%;">

                                                @foreach ($mainRoles as $mainRole)
                                                <option value="{{$mainRole->id}}" 
                                                    @if ($user->is_admin == $mainRole->id)
                                                        selected
                                                    @endif
                                                    >{{$mainRole->name}}</option>
                                                @endforeach
                                             
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="card-footer card-create">
                                <a href="" type="button" class="btn btn-outline-secondary">ยกเลิก</a>
                                <button type="submit" class="btn btn-primary">บันทึก</button>
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
