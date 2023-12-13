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
                <h4>Matches List</h4>
                <h2>Upcoming Matches</h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
            </div>
        </div>
    </section>
    <section class="matches-section padding-top">
        <div class="container">
            <ul class="upcoming-matches">
                @foreach ($services as $service)
                    <li class="matches-list">
                        <div class="participate-team wow fade-in-left" data-wow-delay="200ms">
                            <img src="{{ asset($service->detais_image_1) }}" alt="team">
                            <h3><a href="#">{{ $service->title_english }}</a></h3>
                            {{-- <div class="match-info">Group 04 | Match 06th</div> --}}
                        </div>
                        <div class="match-time">
                            <h3>{{ Carbon\Carbon::parse($service->price)->format('h:i') }} <br>
                                {{ Carbon\Carbon::parse($service->price)->format('A') }}<span>{{ Carbon\Carbon::parse($service->price)->format('dS M Y') }}</span>
                            </h3>
                            <ul class="watch-btn">
                                {{-- <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i
                                            class="lab la-youtube"></i></a>
                                </li>
                                <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-twitch"></i></a>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="participate-team oponent wow fade-in-right" data-wow-delay="200ms">
                            <h3><a href="#">{{ $service->title_bangla }}</a></h3>
                            {{-- <div class="match-info">Group 04 | Match 06th</div> --}}
                            <img src="{{ asset($service->detais_image_2) }}" alt="team">
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="text-center mt-50">
                <a href="#" class="default-btn">Load More Matches</a>
            </div>
        </div>
    </section>
@endsection
