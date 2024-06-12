@extends('layouts.setting-dashboard')

@section('content')
<div>
    <div>
        <div class="container-fluid">
            <div class="title-header">
                <div>
                    <h3 class="m-0">นำเข้าสมาชิก <span class="text-danger">(ปิดการใช้งาน)</span> </h3>
                </div>
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">นำเข้าสมาชิก</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                เกิดข้อผิดพลาดการนำเข้า โปรดตรวจสอบไฟล์นำเข้าให้ถูกต้อง
            </div>
            @endif
            <div class="row">
                <div class="col-sm-12">
                    <div class="card border-0 rounded-4">
                        <div class="card-header">
                            <h4 class="m-0">วิธีการนำเข้าสมาชิก</h4>
                        </div>
                        <div class="card-body">
                            <p>การนำเข้าสมาชิกโดยใช้ไฟล์เทมเพลต จะต้องตรวสอบข้อมูลให้ถูกต้องและห้ามลบแถวแรกของตาราง
                                ถ้าช่องคอลัมน์ที่ไฮไลต์สีแดงจะต้องใส่ให้ครบ</p>
                            <strong>ดาวน์โหลดเทมเพลต</strong>
                            <div>
                                <a
                                    href="">เทมเพลตนำเข้าสมาชิก</a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12">
                    <form action="" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="px-4">
                            <label class="custom-file-label" for="customFile">เลือกไฟล์ exel</label>
                            <div class="d-flex gap-2">
                                    <input type="file" name="file" class="form-control col-6" accept=".xlsx, .xls, .csv"
                                    id="customFile" style="width: 250px;">
                                <button type="submit" class="btn btn-primary mb-2" disabled>นำเข้าสมาชิก</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(function () {
        bsCustomFileInput.init();
        });
</script>
@endpush
@endsection