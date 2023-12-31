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
                                {{-- <a href="{{ route('add.services') }}"
                                    class="btn btn-primary rounded-pill waves-effect waves-light">Add Team</a> --}}
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

                            <p class="text-white" style="font-size: 20px">Person Main Informantion</p>

                            <form id="myForm" method="post"
                                action="{{ route('ranking.update', $trunamentRanking->id) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="example-email" class="form-label">Select Tournament</label>
                                            <select id="tournamentSelect" name="trunament_id" class="form-select mt-2 p-2">
                                                <option value="" selected disabled>Select Star...</option>
                                                @foreach ($tournaments as $tournament)
                                                    <option value="{{ $tournament->id }}"
                                                        {{ $tournament->id == $trunamentRanking->trunament_id ? 'selected' : '' }}>
                                                        {{ $tournament->title_english }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="example-email" class="form-label">Select Team</label>
                                            <select id="teamSelect" name="team_id" class="form-select mt-2 p-2" disabled>
                                                <option value="{{ $trunamentRanking->TeamInfo->id }}" selected disabled>
                                                    {{ $trunamentRanking->TeamInfo->team_name }}</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">PTS</label>
                                            <input type="number" name="ranking_number"
                                                value="{{ $trunamentRanking->ranking_number }}" class="form-control"
                                                placeholder="01">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="example-email" class="form-label">Kill</label>
                                            <input type="number" name="Kill" class="form-control"
                                                value="{{ $trunamentRanking->Kill }}" placeholder="01">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="example-email" class="form-label">Booyah</label>
                                            <input type="number" name="Booyah" class="form-control"
                                                value="{{ $trunamentRanking->Booyah }}" placeholder="01">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="example-email" class="form-label">Match</label>
                                            <input type="number" name="match" class="form-control"
                                                value="{{ $trunamentRanking->match }}" placeholder="01">
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

                </div>
            </div>
        </div> <!-- content -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tournamentSelect').change(function() {
                    var selectedTournament = $(this).val();
                    $.ajax({
                        url: '/admin-team-data',
                        method: 'GET',
                        data: {
                            trunament_id: selectedTournament
                        },
                        success: function(response) {
                            $('#teamSelect').empty();
                            $('#teamSelect').prop('disabled', false);
                            $.each(response, function(index, team) {
                                $('#teamSelect').append('<option value="' + team.id + '">' +
                                    team.team_name + '</option>');
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                });
            });
        </script>
    @endsection
