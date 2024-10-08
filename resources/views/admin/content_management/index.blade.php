@extends('admin.master')
@section('content')
    @push('stylesheets')
        <link href="{{ asset('admin/_assets/lib/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('admin/_assets/lib/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    @endpush
    <section class="main-content">
        <div class="row">
            <div class="col-md-12">
                @include('admin.flash-message')
                <div class="card">
                    <div class="card-header card-default">
                        <div class="row">
                            <div class="col-md-6">
                               Cms User Listing
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-info pull-right" href="{{ route('cms-users-management.create') }}">Add Cms User</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="_ajax_datatable" class="table">
                            <thead>
                                <tr>
                                    <th>Identifier</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.footer')
    </section>
    @push('scripts')
        <script src="{{ asset('admin/_assets/lib/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/_assets/lib/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('admin/_assets/js/datatable-ajax.js') }}"></script>
    @endpush
@endsection
