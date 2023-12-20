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
                            <form method="post" action="{{ route('page-title.store') }}" enctype="multipart/form-data">
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
            @for ($page = 1; $page <= 9; $page++)
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title py-2">

                                    @if ($page == 1)
                                        Home page
                                    @elseif ($page == 2)
                                        About Us
                                    @elseif ($page == 3)
                                        Tournament
                                    @elseif ($page == 4)
                                        Blog
                                    @elseif ($page == 5)
                                        Recent Activity
                                    @elseif ($page == 6)
                                        Career
                                    @elseif ($page == 7)
                                        Contact
                                    @elseif ($page == 8)
                                        Upcoming Tournament
                                    @elseif ($page == 9)
                                        Upcoming Matches
                                    @endif


                                </h4>
                                <table id="basic-datatable{{ $page }}" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Sub Title</th>
                                            <th>Short Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $filteredPageTitle = $PageTitle->filter(function ($item) use ($page) {
                                                return $page == $item->page;
                                            });
                                        @endphp

                                        @foreach ($filteredPageTitle as $item)
                                            <tr>
                                                <td> {{ $loop->iteration }} </td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->sub_title }}</td>
                                                <td>{{ $item->sort_description }}</td>
                                                <td>
                                                    <form action="{{ route('page-title.destroy', $item->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <a href="{{ route('page-title.edit', $item->id) }}"
                                                            class="btn btn-info">Edit</a>
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
            @endfor
            <!-- end row-->


            <!-- end row-->
        </div> <!-- container -->
    </div> <!-- content -->
@endsection


@push('script')
    <script>
        const now = new Date();
        let hours = now.getHours();
        let minutes = now.getMinutes();
        hours = hours < 10 ? '0' + hours : hours;
        minutes = minutes < 10 ? '0' + minutes : minutes;
        const currentTime = hours + ':' + minutes;
        document.getElementById('start_time').value = currentTime;
        const today = new Date().toISOString().slice(0, 10);
        document.getElementById('TodayDate').setAttribute('value', today);

        for (let i = 1; i <= 9; i++) {
            console.log($(`#basic-datatable${i}`));
            $(`#basic-datatable${i}`).DataTable({});
        }
    </script>
@endpush
