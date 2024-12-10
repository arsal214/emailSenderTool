@extends('admin.layout.app')

@section('title','Create Template')

@section('header')
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Home - <span class="fw-normal">Template Management</span>
            </h4>
        </div>
        <div class="d-lg-block my-lg-auto ms-lg-auto">
            <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">
                <a href="{{ route('templates.index') }}" class="btn btn-outline-primary btn-labeled btn-labeled-start rounded-pill">
                <span class="btn-labeled-icon bg-primary text-white rounded-pill">
                    <i class="ph-arrow-circle-left"></i>
                </span>
                    Back
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">{{ __('Create Template') }}</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('templates.store') }}" class="validate" role="form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="template_id" value="{{ $template->id ?? null}}">

                    <div class="row g-2">

                        <label for="">Name</label>
                        <input   name="name" class="form-control" value="{{$template->name ?? null}}" required="required" />

                        <label for="">Subject</label>

                        <input  name="subject" class="form-control" value="{{$template->subject ?? null}}"/>

                        <input   title="Email Template" name="body" value="{{$template->body ?? null}}"  class="tinymce"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/js/tinymce.js') }}"></script>
@endsection
