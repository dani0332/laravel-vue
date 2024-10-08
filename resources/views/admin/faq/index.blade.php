@extends('admin.master')
@section('content')
    @push('stylesheets')
        <link href="{{ asset('assets/admin/lib/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/admin/lib/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    @endpush
    <section class="main-content">
        <div class="row">
            <div class="col-md-12">
                @include('admin.flash-message')
                <div class="card">
                    <div class="card-header card-default">
                        <div class="row">
                            <div class="col-md-6">
                               Faq Listing
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-info pull-right" href="{{ route('faq.create') }}">Add Faq</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="_ajax_datatable" class="table">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="checked_all"></th>
                                    <th>Question</th>
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
        <script src="{{ asset('assets/admin/lib/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/admin/lib/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/datatable-ajax.js') }}"></script>
    @endpush
@endsection
