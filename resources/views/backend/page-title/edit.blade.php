@extends('admin_dashboard')
@section('title')
    Dashboard
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
                                {{-- <a href="{{ route('add.team') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Team/Teacher </a> --}}
                            </ol>
                        </div>
                        <h4 class="page-title">All Team Members</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-white" style="font-size: 20px">Trunament Round Information</p>
                            <form method="post" action="{{ route('page-title.update', 1) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 ">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Page Name </label>
                                            <select id="tournamentSelect" name="page" class="form-select mt-2 p-2">
                                                <option value="" selected disabled>Select Page Name...</option>
                                                <option value="1">Home</option>
                                                <option value="2">About Us</option>
                                                <option value="3">Tournament</option>
                                                <option value="4">Blog</option>
                                                <option value="5">Recent Activity</option>
                                                <option value="6">Career</option>
                                                <option value="7">Contact</option>
                                                <option value="8">Upcoming Tournament</option>
                                                <option value="9">Upcoming Matches</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Title </label>
                                            <input type="text" name="title" value="" class="form-control "
                                                placeholder="Title Name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Sub Title </label>
                                            <input type="text" name="sub_title" class="form-control"
                                                placeholder="Sub Title...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Short Description</label>
                                            <input type="text" name="sort_description" class="form-control mt-2 p-2"
                                                placeholder="Short Description Name...">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success waves-effect waves-light "><i
                                                class="mdi mdi-content-save"></i>Save</button>
                                    </div>
                                </div>
                            </form>
                            <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->

                </div><!-- end col -->
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
@endsection
