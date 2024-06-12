@extends('layouts.dashboard')

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/loading.css?v=1.0') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
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
                    <h3 class="m-0">เพิ่มสมัยประชุม</h3>
                </div>
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}">หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item active">สมัยประชุม</li>
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
                 
                        <form action="{{route('setting.user.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>ประเภท</label>
                                            <select name="prefix"
                                                class="form-control select2"
                                                style="width: 100%;">
                                                @foreach ($meetingSedssionTypes as $meetingSedssionType)
                                                    <option value="{{$meetingSedssionType->id}}">{{$meetingSedssionType->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>ครั้งที่ <span class="fw-bold text-danger">*</span></label>
                                            <input type="text" name="value" value="{{old('value')}}"
                                                class="form-control @error('value') is-invalid @enderror">
                                        </div>
                                    </div>
                                 
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>ชื่อสมัยประชุม <span class="fw-bold text-danger">*</span></label>
                                            <input type="text" name="value" value="{{old('value')}}"
                                                class="form-control @error('value') is-invalid @enderror">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>วันที่ <span class="fw-bold text-danger">*</span></label>
                                            <input type="text" name="value" value="{{old('value')}}"
                                                class="form-control @error('value') is-invalid @enderror">
                                        </div>
                                    </div>
                                </div>             
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <input type="text" id="userId" value="1" hidden="">
                <div class="col-12">
                    <div class="card card-tabs">
                        <div class="p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#meeting-record-tab" role="tab" tabindex="-1">บันทึกการประชุม</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#meeting-vote-record-tab" role="tab" tabindex="-1">บันทึกการลงคะแนน</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#meeting-report-tab" role="tab" tabindex="-1">สรุปการประชุม</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#meeting-event-tab" role="tab" tabindex="-1">บันทึกเหตุการณ์</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#meeting-attachment-tab" role="tab" tabindex="-1">เอกสารแนบ</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="card-body tab-pane fade show active" id="meeting-record-tab" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>รายละเอียดบันทึกการประชุม</label>
                                                <textarea id="summernote-meeting-record" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body tab-pane fade" id="meeting-vote-record-tab" role="tabpanel" >
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>รายละเอียดบันทึกการลงคะแนน</label>
                                                <textarea id="summernote-meeting-vote-record" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body tab-pane fade" id="meeting-report-tab" role="tabpanel" >
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>รายละเอียดสรุปการประชุม</label>
                                                <textarea id="summernote-meeting-report" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body tab-pane fade" id="meeting-event-tab" role="tabpanel" >
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>รายละเอียดบันทึกเหตุการณ์</label>
                                                <textarea id="summernote-meeting-event" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body tab-pane fade" id="meeting-attachment-tab" role="tabpanel" >
                                    <div class="row">
                                        <div class="col-12" >
                                            <button type="submit" class="btn btn-primary"><span class="material-symbols-outlined" style="font-size: 12px">
                                                add
                                            </span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@push('scripts')

<script type="module"
    src="{{asset('assets/js/helpers/learning-system/setting/learning-list/chapter/topic/create.js?v=1')}}"></script>
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
{{-- <script src="{{asset('assets/js/helpers/helper.js?v=1')}}"></script> --}}
<script>
    window.params = {
        storeRoute: '',
        url: '{{ url('/') }}',
        token: $('meta[name="csrf-token"]').attr('content')
    };

        $(document).ready(function() {
        $('#summernote-meeting-record').summernote({
          height: 400
        });
        $('#summernote-meeting-vote-record').summernote({
          height: 400
        });
        $('#summernote-meeting-report').summernote({
          height: 400
        });
        $('#summernote-meeting-event').summernote({
          height: 400
        });
    
      });

</script>
@endpush
@endsection
