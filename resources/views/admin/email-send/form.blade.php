@extends('admin.layout.app')

@section('title','Create Email Send')

@section('header')
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Home - <span class="fw-normal">Email Send  Management</span>
            </h4>
        </div>
        <div class="d-lg-block my-lg-auto ms-lg-auto">
            <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">
                <a href="{{ route('customers.index') }}" class="btn btn-outline-primary btn-labeled btn-labeled-start rounded-pill">
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
                <form method="POST" action="{{ route('email-sends.store') }}" class="validate" role="form" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-2">

                        <label for="">Name</label>
                        <select class="form-control" name="template_name" id="">
                            <option value="">Select Template</option>
                            @foreach($templates as $template)
                            <option value="{{$template->name}}">{{$template->name}}</option>
                            @endforeach
                        </select>


                    </div>
                    <div class="col-md-12 d-flex justify-content-end align-items-center mt-3">
                        <button type="submit" class="btn btn-primary ms-3">
                            Submit <i class="ph-paper-plane-tilt ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
