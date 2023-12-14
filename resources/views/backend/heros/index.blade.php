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
                                {{-- <a href="{{ route('add.notice') }}" class="btn btn-primary rounded-pill waves-effect waves-light"></a> --}}
                            </ol>
                        </div>
                        <h4 class="page-title">All Hearos</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <p class="text-white" style="font-size: 20px">Notice Main Informantion</p>

                            <form id="myForm" method="post" action="{{ route('heros-section.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" id="pdf_file" name="heros_image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label for="image" class="form-label">Heros Shorts</label>
                                            <input type="text" id="pdf_file" name="heros_short"
                                                value="{{ $hero->heros_short }}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label for="image" class="form-label">Heros Title</label>
                                            <input type="text" id="pdf_file" name="heros_title"
                                                value="{{ $hero->heros_title }}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label for="image" class="form-label">Heros Video</label>
                                            <input type="text" id="pdf_file" name="video" value="{{ $hero->video }}"
                                                class="form-control">
                                        </div>
                                    </div>


                                </div>

                                <!-- end row-->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success waves-effect waves-light "><i
                                            class="mdi mdi-content-save"></i>Submit</button>
                                </div>
                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card -->

                </div><!-- end col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">All Heros Table</h4>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>heros short</th>
                                        <th>heros Title</th>
                                        <th>Video ID</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <th>heros short</th>
                                        <th>heros Title</th>
                                        <th>Video ID</th>
                                        <th>Image</th>
                                        <td>
                                            <a href="{{ route('notice.edit', 1) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ route('notice.delete', 1) }}" id="delete"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>


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
