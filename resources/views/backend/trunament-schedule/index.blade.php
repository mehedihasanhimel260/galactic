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
                            <p class="text-white" style="font-size: 20px">Trunament Season Information</p>
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <div class="form-group mb-3">
                                        <form method="post" action="{{ route('trunament-season.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <label for="simpleinput" class="form-label">Season Name </label>
                                            <input type="text" name="name" id="title_english" class="form-control"
                                                placeholder="Season Name...">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success waves-effect waves-light "><i
                                                        class="mdi mdi-content-save"></i>Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-8 mt-2">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Season Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tournament_season as $round)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>
                                                        <form style="float: left;"
                                                            action="{{ route('trunament-season.update', $round->id) }}"
                                                            method="POST">
                                                            @method('PUT')
                                                            @csrf
                                                            <div class="form-group ">
                                                                <input type="text" id="title_bangla" name="name"
                                                                    class="form-control" value="{{ $round->name }}"
                                                                    placeholder="Title In Bangla...">
                                                            </div>
                                                    </td>
                                                    <td>
                                                        <button type="submit" class="btn btn-info mt-2">Update</button>
                                                        </form>
                                                        <form style="float: right;"
                                                            action="{{ route('trunament-season.destroy', $round->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger mt-2"
                                                                onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->

                </div><!-- end col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-white" style="font-size: 20px">Round Information</p>
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <div class="form-group mb-3">
                                        <form method="post" action="{{ route('trunament-round-schedule.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <label for="simpleinput" class="form-label">Season Name </label>
                                            <select id="tournamentSelect" name="seasons_id" class="form-select mt-2 p-2">
                                                <option value="" selected disabled>Select Season Name...</option>
                                                @foreach ($tournament_season as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <label for="simpleinput" class="form-label">Round Name </label>
                                            <input type="text" name="name" id="title_english" class="form-control"
                                                placeholder="Round Name...">
                                            <br>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success waves-effect waves-light "><i
                                                        class="mdi mdi-content-save"></i>Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-8 mt-2">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Season Name</th>
                                                <th scope="col">Round Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rounds as $round)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>

                                                    <form style="float: left;"
                                                        action="{{ route('trunament-round-schedule.update', $round->id) }}"
                                                        method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <td>
                                                            <div class="form-group ">
                                                                <select id="tournamentSelect" name="seasons_id"
                                                                    class="form-select mt-2 p-2">
                                                                    <option value="" selected disabled>Select Season
                                                                        Name...</option>
                                                                    @foreach ($tournament_season as $item)
                                                                        <option value="{{ $item->id }}"
                                                                            {{ $round->seasons_id == $item->id ? 'selected' : '' }}>
                                                                            {{ $item->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group ">
                                                                <input type="text" id="title_bangla" name="name"
                                                                    class="form-control" value="{{ $round->name }}"
                                                                    placeholder="Title In Bangla...">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button type="submit"
                                                                class="btn btn-info mt-2">Update</button>
                                                    </form>
                                                    <form style="float: right;"
                                                        action="{{ route('trunament-round-schedule.destroy', $round->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger mt-2"
                                                            onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                                    </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->

                </div><!-- end col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-white" style="font-size: 20px">Trunament Round Information</p>
                            <form method="post" action="{{ route('trunament-schedule.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-2 ">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Season Name </label>
                                            <select id="tournamentSelect" name="seasons_id" class="form-select mt-2 p-2">
                                                <option value="" selected disabled>Select Season Name...</option>

                                                @foreach ($tournament_season as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 ">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Round Name </label>
                                            <select id="tournamentSelect" name="round_id" class="form-select mt-2 p-2">
                                                <option value="" selected disabled>Select route Name...</option>
                                                @foreach ($rounds as $round)
                                                    <option value="{{ $round->id }}">
                                                        {{ $round->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 ">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Date </label>
                                            <input type="date" name="date" id="TodayDate" value=""
                                                class="form-control mt-2 p-2" placeholder="Round Name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 ">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Group </label>
                                            <input type="text" name="group" id="title_english" class="form-control"
                                                placeholder="Round Name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Start Time</label>
                                            <input type="time" name="start_time" id="start_time"
                                                class="form-control mt-2 p-2" placeholder="Round Name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 ">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Map</label>
                                            <input type="text" name="map" id="title_english" class="form-control"
                                                placeholder="Round Name...">
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
            @foreach ($rounds as $round)
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title py-2"> {{ $round->season->name }} {{ $round->name }} Table</h4>
                                <table id="basic-datatable{{ $loop->iteration }}"
                                    class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Round Name</th>
                                            <th>Date</th>
                                            <th>Groupe</th>
                                            <th>Start Time</th>
                                            <th>Map</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $filteredSchedules = $trunamentSchedule->filter(function ($item) use ($round) {
                                                return $item->round->id === $round->id;
                                            });
                                        @endphp
                                        @foreach ($filteredSchedules as $item)
                                            <tr>

                                                <td>{{ $item->round->name }}</td>
                                                <td>{{ \Carbon\Carbon::parse($item->date)->format('d-M-Y') }}</td>
                                                <td>{{ $item->group }}</td>
                                                <td>{{ \Carbon\Carbon::parse($item->start_time)->format('h:i A') }} </td>
                                                <td>{{ $item->map }}</td>
                                                <td>
                                                    <form action="{{ route('trunament-schedule.destroy', $item->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <a href="{{ route('trunament-schedule.edit', $item->id) }}"
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
            @endforeach
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
        @foreach ($rounds as $round)
            $('#basic-datatable{{ $loop->iteration }}').DataTable({});
        @endforeach
    </script>
@endpush
