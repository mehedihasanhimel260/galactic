@extends('admin_dashboard')
@section('title')
    Admin
@endsection
@section('admin')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                {{-- <a href="{{ route('add.blogs') }}"
                                    class="btn btn-primary rounded-pill waves-effect waves-light">Add Blogs</a> --}}
                            </ol>
                        </div>
                        <h4 class="page-title">All CV</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">All CV Table</h4>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Number</th>
                                        <th>Subject</th>
                                        <th>Cover Latter</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($career as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->number }}</td>

                                            <td>{{ $item->subject }} </td>
                                            <td>{{ $item->cover_letter }} </td>
                                            <td>
                                                {{-- <a href="{{ download($item->cv) }}" class="btn btn-info">Download
                                                    CV</a> --}}
                                                <a href="{{ route('tech_web_gaming_career_apply_destroy', $item->id) }}"
                                                    id="delete" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->




        </div> <!-- container -->

    </div> <!-- content -->
@endsection
