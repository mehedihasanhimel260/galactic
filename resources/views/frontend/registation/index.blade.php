@extends('frontend.layout')
@section('content')
    <section class="page-header">
        <div class="page-header-shape">
            <div class="shape"></div>
            <div class="shape center"></div>
            <div class="shape center back"></div>
            <div class="shape right"></div>
        </div>
        <div class="container">
            <div class="page-header-info">
                <h4>Registration Form</h4>
                <h2>Registration</h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
            </div>
        </div>
    </section>
    <section class="checkout-section padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 sm-padding">
                    <img id="output" />
                    <form action="{{ route('gaming_team_registation_store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <h2>Registration Details</h2>
                        <div class="checkout-form mb-30">
                            <div class="form-field">
                                <input type="text" id="firstname" name="team_name" class="form-control"
                                    placeholder="Team Name" required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="lastname" name="link" class="form-control"
                                    placeholder="Channel or Page Link" required>
                            </div>
                            <div class="form-field">
                                <input type="file" id="teamLogo" name="logo" class="form-control" accept="image/*"
                                    onchange="loadFile(event)" placeholder="Company Name" required>
                            </div>
                            <script>
                                var loadFile = function(event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                    output.onload = function() {
                                        URL.revokeObjectURL(output.src)
                                    }
                                };
                            </script>
                            <div class="form-field">
                                <select class="form-control " name="tournament_name"
                                    style="background-color:rgba(255,255,255,.1) !importent; ;">

                                    <option value="" disabled selected>Open this select Tournament Name</option>

                                    @foreach ($trunaments as $trunament)
                                        <option value="{{ $trunament->id }}">{{ $trunament->title_english }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-field">
                                <input type="text" id="city" name="email" class="form-control" placeholder="email"
                                    required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="state" name="number" class="form-control"
                                    placeholder="number" required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="street" name="player_name_1" class="form-control"
                                    placeholder="player 1:gmail,number, discord id" required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="street" name="player_name_2" class="form-control"
                                    placeholder="player 2:gmail,number, discord id " required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="street" name="player_name_3" class="form-control"
                                    placeholder="player 3:gmail,number, discord id " required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="street" name="player_name_4" class="form-control"
                                    placeholder="player 4:gmail,number, discord id " required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="street" name="player_name_5" class="form-control"
                                    placeholder="player 5:gmail,number, discord id " required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="street" name="player_name_6" class="form-control"
                                    placeholder="player 6:gmail,number, discord id " required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="postcode" name="join_comunication_groupe" class="form-control"
                                    placeholder="Join Our Official group? Yes/No" required>
                            </div>
                        </div>
                        <div class="additional-info mb-30">
                            <h2>Additional Information</h2>
                            <div class="form-field">
                                <textarea id="message" name="additional" cols="30" rows="3" class="form-control"
                                    placeholder="Order Note"></textarea>
                            </div>
                        </div>
                        <div class="checkout-form mb-30">
                            <div class="form-field">
                                <input type="password" id="postcode" name="password" class="form-control"
                                    placeholder="Password" required>
                            </div>
                        </div>
                        <div class="payment-method">
                            <button type="submit" class="default-btn">Registration Now <span
                                    style="top: 421px; left: 129px;"></span><span
                                    style="top: 421px; left: 129px;"></span></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
