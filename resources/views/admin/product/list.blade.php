@extends('layouts.admin_layout')
@section('title') Product @endsection
@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('cp_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('cp_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cp_assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cp_assets/plugins/datatables-rowgroup/css/rowGroup.bootstrap4.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('cp_assets/plugins/datatables-rowreorder/css/rowReorder.bootstrap4.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('cp_assets/plugins/datatables-colreorder/css/colReorder.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cp_assets/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('cp_assets/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Products @if(hasWriteAccess(4))
                            <button type="button" class="btn btn-primary btn-sm rounded-s btn-pill-right" id="new">
                                <i class="fa fa-location-arrow"></i> New Product
                            </button>
                        @endif</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Product</li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-none">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-hover w-100">
                            <thead>
                            <tr>
                                <th class="d-none">id</th>
                                <th>#</th>
                                <th>Attachment</th>
                                <th>Title</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('cp_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/datatables-colreorder/js/dataTables.colReorder.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/datatables-rowgroup/js/dataTables.rowGroup.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/datatables-rowreorder/js/dataTables.rowReorder.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('cp_assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
@endsection
@section('page-scripts')
    <script src="{{ asset('cp_assets/dist/js/page-js/product/product.js') }}"></script>
@endsection

