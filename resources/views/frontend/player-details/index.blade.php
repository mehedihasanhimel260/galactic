@extends('frontend.layout')
@section('content')
    <section class="page-header team-details">
        <div class="page-header-shape">
            <div class="shape"></div>
            <div class="shape center"></div>
            <div class="shape center back"></div>
            <div class="shape right"></div>
        </div>
        <div class="container">
            <div class="page-header-info player-details">
                <div class="player-thumb"><img src="{{ asset($teams->image) }}" alt="team"></div>
                <h2>{{ $teams->name_english }} <span> {{ $teams->desig_english }}</span></h2>
            </div>
        </div>
    </section>
    <div class="team-details-info player-details">
        <div class="container">
            <div class="team-details-wrap">
                <div class="player-team">
                    {{-- <a href="#"><img src="assets/img/team-logo-2.png" alt="logo"></a> --}}
                    {{-- <h3><a href="#">Galactic Squad</a></h3> --}}
                    <ul class="social-list">
                        <li>Follow Me:</li>
                        <li><a href="{{ $teams->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $teams->twitter }}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $teams->youtube }}"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <section class="about-team-section padding-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 sm-padding">
                    <div class="section-heading">
                        <h3>About Me</h3>
                        <h2>About The <span>Player</span></h2>
                        <p>
                            {!! $teams->name_bangla !!}
                        </p>

                    </div>
                </div>
                <div class="col-md-6 sm-padding">
                    <div class="player-thumb">
                        <img src="{{ asset($teams->image) }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
