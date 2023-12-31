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
                            <h4 class="header-title py-2">All Team Members Table</h4>
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trunament_teams as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><img src="{{ asset($item->logo) }}" alt=""
                                                    style="width:80px;height:80px"></td>
                                            <td>{{ $item->team_name }}</td>
                                            <td>{{ $item->tournament_name }}</td>
                                            <td>{{ $item->number }}</td>
                                            <td>

                                            </td>
                                            <td>
                                                <a href="{{ route('edit.team', $item->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ route('delete.team', $item->id) }}" id="delete"
                                                    class="btn btn-danger">Delete</a>
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
