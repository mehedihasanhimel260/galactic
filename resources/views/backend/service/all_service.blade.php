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
                                <a href="{{ route('add.services') }}"
                                    class="btn btn-primary rounded-pill waves-effect waves-light">Add Team</a>
                            </ol>
                        </div>
                        <h4 class="page-title">All Team</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">All Team Table</h4>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Team 1</th>
                                        <th>vs</th>
                                        <th>Team 2</th>
                                        <th>Image</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($services as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><img src="{{ asset($item->detais_image_1) }}" alt=""
                                                    style="width:90px;height:80px"></td>
                                            <td>{{ $item->title_english }}</td>
                                            <td>VS</td>
                                            <td>{{ $item->title_bangla }}</td>
                                            <td><img src="{{ asset($item->detais_image_2) }}" alt=""
                                                    style="width:90px;height:80px"></td>
                                            <td>{{ Carbon\Carbon::parse($item->price)->format('d-M-Y h:i:A') }}
                                            </td>

                                            <td>
                                                @if ($item->status == '1')
                                                    <a href="{{ route('service.inactive', $item->id) }}"
                                                        class="badge rounded-pill p-2 "
                                                        style="background: green;color:white;font-size:12px">Active</a>
                                                @else
                                                    <a href="{{ route('service.active', $item->id) }}"
                                                        class="badge rounded-pill bg-danger p-2"
                                                        style="font-size:12px;color:white">Deactive</a>
                                                @endif
                                            </td>
                                            <td width="10%">
                                                <a href="{{ route('edit.service', $item->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('delete.service', $item->id) }}" id="delete"
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
