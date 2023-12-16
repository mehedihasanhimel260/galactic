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
                            <form method="post" action="{{ route('trunament-schedule.update', $trunamentSchedule->id) }}"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-2 ">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Round Name </label>
                                            <select id="tournamentSelect" name="round_id" class="form-select mt-2 p-2">
                                                <option value="" selected disabled>Select route Name...</option>
                                                @foreach ($rounds as $round)
                                                    <option value="{{ $round->id }}"
                                                        {{ $trunamentSchedule->round_id == $round->id ? 'selected' : '' }}>
                                                        {{ $round->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 ">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Date </label>
                                            <input type="date" name="date" id="title_english"
                                                value="{{ $trunamentSchedule->date }}" class="form-control mt-2 p-2"
                                                placeholder="Round Name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Group </label>
                                            <input type="text" name="group" id="title_english" class="form-control"
                                                value="{{ $trunamentSchedule->group }}" placeholder="Round Name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Start Time</label>
                                            <input type="time" name="start_time" id="title_english"
                                                value="{{ $trunamentSchedule->start_time }}" class="form-control mt-2 p-2"
                                                placeholder="Round Name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">Map</label>
                                            <input type="text" name="map" id="title_english" class="form-control"
                                                value="{{ $trunamentSchedule->map }}" placeholder="Round Name...">
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
