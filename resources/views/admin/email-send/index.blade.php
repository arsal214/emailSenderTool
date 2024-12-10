@extends('admin.layout.app')

@section('title','Template')

@section('header')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Home - <span class="fw-normal">Customer Management</span>
                </h4>

                <a href="#page_header"
                   class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                   data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>

            <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">


                    <a href="{{route('templates.create')}}" class="btn btn-outline-primary btn-labeled btn-labeled-start rounded-pill" >
            <span class="btn-labeled-icon bg-primary text-white rounded-pill">
                <i class="ph-plus"></i>
            </span>
                        Create New
                    </a>

                </div>
            </div>
        </div>

    </div>

@endsection

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Customers</h5>
            </div>
            <table class="table datatable-basic">
                <thead class="thead">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($templates as $key => $list)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $list->name   }} </td>
                        <td>{{ $list->subject }}</td>
                        <td class="text-center">@include('admin.template.actions')</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(function () {
            const swalInit = swal.mixin({
                buttonsStyling: false,
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-light',
                    denyButton: 'btn btn-light',
                    input: 'form-control'
                }
            });
            $(".sa-confirm").click(function (event) {
                event.preventDefault();
                swalInit.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    buttonsStyling: false,
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    }
                }).then((result) => {
                    if (result.value === true)  $(this).closest("form").submit();
                });
            });
        });

        $(document).ready(function() {
            $('#create-new').on('click', function() {
                $('.template-wrapper').toggleClass('d-none');
            });
        });
    </script>
@endsection
