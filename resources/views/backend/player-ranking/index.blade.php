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
                        <h4 class="page-title">All player</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <p class="text-white" style="font-size: 20px">player Main Informantion</p>

                            <form id="myForm" method="post" action="{{ route('player-ranking.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="example-email" class="form-label">Player Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Player Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput" class="form-label">PTS</label>
                                            <input type="number" name="pts" class="form-control" placeholder="01">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="example-email" class="form-label">Kill</label>
                                            <input type="number" name="Kill" class="form-control" placeholder="01">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="example-email" class="form-label">Booyah</label>
                                            <input type="number" name="Booyah" class="form-control" placeholder="01">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mb-3">
                                            <label for="example-email" class="form-label">Match</label>
                                            <input type="number" name="match" class="form-control" placeholder="01">
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

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"> All Person Ranking Table</h4>


                        <table id="basic-datatable class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Pos</th>
                                    <th>Player Name</th>
                                    <th>Match</th>
                                    <th>Booyah</th>
                                    <th>Kill</th>
                                    <th>PTS</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($PlayerRanking as $item)
                                    <tr>
                                        <td> {{ $loop->iteration }} </td>
                                        <td> {{ $item->name }}</td>
                                        <td> {{ $item->match }}</td>
                                        <td> {{ $item->Booyah }}</td>
                                        <td> {{ $item->Kill }}</td>
                                        <td> {{ $item->pts }}</td>
                                        <td width="10%">
                                            <form action="{{ route('player-ranking.destroy', $item->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('player-ranking.edit', $item->id) }}"
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


            $(document).ready(function() {
                $('#tournamentSelect2').change(function() {
                    var selectedTournament = $(this).val();
                    $.ajax({
                        url: '/admin-team-data',
                        method: 'GET',
                        data: {
                            trunament_id: selectedTournament
                        },
                        success: function(response) {
                            $('#teamSelect2').empty();
                            $('#teamSelect2').prop('disabled', false);
                            $.each(response, function(index, team) {
                                $('#teamSelect2').append('<option value="' + team.id +
                                    '">' +
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
    @push('script')
        <script></script>
    @endpush
