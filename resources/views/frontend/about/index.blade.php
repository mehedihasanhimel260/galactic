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
                @foreach ($PageTitle as $key => $item)
                    @if ($key === 0)
                        <h3>{{ $item->title }}</h3>
                        <h2>{{ $item->sub_title }}</h2>
                        <p>{{ $item->sort_description }}</p>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <section class="about-section padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 sm-padding">
                    <div class="about-content">
                        <div class="section-heading">
                            <h3>About Galactic Squad</h3>
                            <h2>{{ $about->title_english }}</h2>
                            <p>{!! $about->details_1_eng !!}</p>
                            <a href="{{ route('contact.us') }}" class="default-btn">Join Our Team</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 sm-padding">
                    <img src="{{ asset($about->main_image) }}" alt="img">
                </div>
            </div>
        </div>
    </section>
    <section class="latest-matches padding-bottom">
        <div class="container">
            <div class="section-heading-group mb-40">
                <div class="section-heading">
                    @foreach ($PageTitle as $key => $item)
                        @if ($key === 1)
                            <h3>{{ $item->title }}</h3>
                            <h2>{{ $item->sub_title }}</h2>
                            <p>{{ $item->sort_description }}</p>
                        @endif
                    @endforeach
                </div>
                <div><a href="upcoming-matches.html" class="default-btn">View All Matches</a></div>
            </div>
            @foreach ($videos as $video)
                <div class="latest-matches-lists">
                    <div class="latest-matches-list">
                        <div class="matches-thumb">

                            <img src="https://i.ytimg.com/vi/{{ $video->video_link }}/hqdefault.jpg" alt="thumb">


                        </div>
                        <div class="latest-match-info">
                            <a href="#" class="match-category">Battle Royale</a>
                            <h3>{{ $video->title }}</h3>
                            <ul class="match-meta">
                                <li><a href="#">Dec.06.2019 - 02:30 pm</a></li>
                            </ul>
                        </div>
                        <div class="watch-info">
                            <a 
                            {{-- class="dl-video-popup" data-autoplay="true" data-vbtype="video"  --}}
                              target="_blank"
                                href="https://www.youtube.com/watch?v={{ $video->video_link }}"><i
                                    class="lab la-youtube"></i>Watch Streem</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <div class="sponsor-section padding-bottom">
        <div class="container">
            <div class="outside-spacing">
                <div class="sponsor-carousel">
                    <div class="swiper-wrapper">
                        @foreach ($brands as $item)
                            <div class="swiper-slide">
                                <img src="{{ asset($item->image) }}" alt="client">
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="team-section padding-bottom">
        <div class="container">
            <div class="section-heading text-center mb-40">
                @foreach ($PageTitle as $key => $item)
                    @if ($key === 2)
                        <h3>{{ $item->title }}</h3>
                        <h2>{{ $item->sub_title }}</h2>
                        <p>{{ $item->sort_description }}</p>
                    @endif
                @endforeach
            </div>
            <div class="outside-spacing">
                <div class="team-carousel">
                    <div class="swiper-wrapper">
                        @foreach ($teams as $team)
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-thumb">
                                        <img src="{{ asset($team->image) }}" alt="thumb">
                                        <div class="shape-wrap">
                                            <div class="shape shape-1"></div>
                                            <div class="shape shape-2"></div>
                                            <div class="shape shape-3"></div>
                                            <div class="shape shape-4"></div>
                                        </div>
                                    </div>
                                    <div class="team-content">
                                        <span class="whte-shape"></span>
                                        <h3><a href="#">{{ $team->name_english }}</a></h3>
                                        <h4>{{ $team->desig_english }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                    <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section">
        <div class="container">
            <div class="section-heading">
                @foreach ($PageTitle as $key => $item)
                    @if ($key === 3)
                        <h3>{{ $item->title }}</h3>
                        <h2>{{ $item->sub_title }}</h2>
                    @endif
                @endforeach
                <a href="{{ route('contact.us') }}" class="default-btn">Join Our Team</a>
            </div>
        </div>
    </section>
@endsection
