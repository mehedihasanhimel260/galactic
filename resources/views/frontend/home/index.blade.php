@extends('frontend.layout')
@section('content')
    <section class="hero-section">


        <div class="container">
            <div class="hero-content">
                <h4>{{ $heros->heros_short }}</h4>
                <h1>{{ $heros->heros_title }}</h1>
                <div class="btn-group">
                    <a href="{{ route('contact.us') }}" class="default-btn">Join With Us</a>
                    <a data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v={{ $heros->video }}"
                        class="dl-video-popup play-btn">
                        <svg enable-background="new 0 0 41.999 41.999" version="1.1" viewBox="0 0 41.999 41.999"
                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40  c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20  c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z M7.5,39.095V2.904l26.239,18.096L7.5,39.095z">
                            </path>
                        </svg>
                        <div class="ripple"></div>
                    </a>
                </div>
                <div class="hero-element">
                    <img src="{{ asset($heros->heros_image) }}" alt="thumb">
                    <div class="shape-wrap">
                        <div class="shape shape-1"></div>
                        <div class="shape shape-2"></div>
                        <div class="shape shape-3"></div>
                        <div class="shape shape-4"></div>
                    </div>
                    <div class="shape-wrap right">
                        <div class="shape shape-1"></div>
                        <div class="shape shape-2"></div>
                        <div class="shape shape-3"></div>
                        <div class="shape shape-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gradiant-border"></div>
    </section>

    <section class="matches-section padding">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                @foreach ($PageTitle as $key => $item)
                    @if ($key === 0)
                        <h3>{{ $item->title }}</h3>
                        <h2>{{ $item->sub_title }}</h2>
                        <p>{{ $item->sort_description }}</p>
                    @endif
                @endforeach

            </div>
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
        </div>
    </section>
    <section class="matches-section padding">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                @foreach ($PageTitle as $key => $item)
                    @if ($key === 1)
                        <h3>{{ $item->title }}</h3>
                        <h2>{{ $item->sub_title }}</h2>
                        <p>{{ $item->sort_description }}</p>
                    @endif
                @endforeach
            </div>
            <section class="cart-section padding-top">
                @foreach ($rounds as $round)
                    <div class="container mt-5">
                        <h2>{{ $round->season->name }} {{ $round->name }} Table</h2>
                        <hr style="width:50%;text-align:left;margin-left:0;padding:5px;">
                        <div class="row cart-header">
                            <div class="col-lg-6">Date</div>
                            <div class="col-lg-2">Group</div>
                            <div class="col-lg-2">Time</div>
                            <div class="col-lg-2">Map</div>
                        </div>
                        @php
                            $filteredSchedules = $trunamentSchedule->filter(function ($item) use ($round) {
                                return $item->round->id === $round->id;
                            });
                        @endphp
                        @foreach ($filteredSchedules as $item)
                            <div class="row cart-body pb-30">
                                <div class="col-lg-6">
                                    <div class="cart-item">
                                        <h3>{{ \Carbon\Carbon::parse($item->date)->format('d-M-Y') }}</h3>
                                    </div>
                                </div>
                                <div class="col-4 col-lg-2">
                                    <div class="cart-item">
                                        <h3> {{ $item->group }}</h3>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-2">
                                    <div class="cart-item">
                                        <h3>{{ \Carbon\Carbon::parse($item->start_time)->format('h:i A') }} </h3>
                                    </div>
                                </div>
                                <div class="col-3 col-lg-2">
                                    <div class="cart-item">
                                        <h3>{{ $item->map }}</h3>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </section>
        </div>
    </section>

    <section class="matches-section padding">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                @foreach ($PageTitle as $key => $item)
                    @if ($key === 2)
                        <h3>{{ $item->title }}</h3>
                        <h2>{{ $item->sub_title }}</h2>
                        <p>{{ $item->sort_description }}</p>
                    @endif
                @endforeach
            </div>
            <section class="cart-section padding-top">

                <table id="example" class="table text-light table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Pos</th>
                            <th>Team Name</th>
                            <th>Match</th>
                            <th>Booyah</th>
                            <th>Kill</th>
                            <th>PTS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trunamentRanking as $key => $item)
                            <tr class="text-light">
                                <td>{{ $key + 1 }}</td>
                                @php
                                    $tournament_name = \App\Models\Blog::where('id', $item->trunament_id)->first()->title_english;
                                    $team_name = \App\Models\TeamInfo::where('id', $item->team_id)->first()->team_name;
                                @endphp
                                <td>{{ $team_name }}</td>
                                <th>{{ $item->match }}</th>
                                <th>{{ $item->Booyah }}</th>
                                <th>{{ $item->Kill }}</th>
                                <th>{{ $item->ranking_number }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </section>
        </div>
    </section>

    <section class="matches-section padding">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                @foreach ($PageTitle as $key => $item)
                    @if ($key === 3)
                        <h3>{{ $item->title }}</h3>
                        <h2>{{ $item->sub_title }}</h2>
                        <p>{{ $item->sort_description }}</p>
                    @endif
                @endforeach
            </div>
            @foreach ($tournaments as $tournament)
                <section class="cart-section padding-top">
                    <h4 class="header-title">{{ $tournament->title_english }} All Person Ranking Table</h4>
                    <table id="example" class="table text-light table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Pos</th>
                                <th>Team Name</th>
                                <th>Match</th>
                                <th>Booyah</th>
                                <th>Kill</th>
                                <th>PTS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $personfilteredRanking = $persontrunamentRanking->filter(function ($item) use ($tournament) {
                                    return $tournament->id === $item->trunament->id;
                                });

                            @endphp
                            @foreach ($personfilteredRanking as $item)
                                <tr class="text-light">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->TeamInfo->team_name }}</td>
                                    <th>{{ $item->match }}</th>
                                    <th>{{ $item->Booyah }}</th>
                                    <th>{{ $item->Kill }}</th>
                                    <th>{{ $item->ranking_number }}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </section>
            @endforeach
        </div>
    </section>


    <section class="watch-live-section padding-bottom">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                @foreach ($PageTitle as $key => $item)
                    @if ($key === 4)
                        <h3>{{ $item->title }}</h3>
                        <h2>{{ $item->sub_title }}</h2>
                        <p>{{ $item->sort_description }}</p>
                    @endif
                @endforeach
            </div>
            <div class="carousel-wrap">
                <div class="watch-carousel swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($videos as $video)
                            <div class="swiper-slide">
                                <img src="https://i.ytimg.com/vi/{{ $video->video_link }}/hqdefault.jpg" alt="thumb">
                                <a data-autoplay="true" data-vbtype="video"
                                    href="https://www.youtube.com/watch?v={{ $video->video_link }}"
                                    class="dl-video-popup play-btn">
                                    <svg enable-background="new 0 0 41.999 41.999" version="1.1"
                                        viewBox="0 0 41.999 41.999" xml:space="preserve"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40  c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20  c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z M7.5,39.095V2.904l26.239,18.096L7.5,39.095z">
                                        </path>
                                    </svg>
                                    <div class="ripple"></div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
            </div>
        </div>
    </section>
    <section class="team-section padding-bottom">
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                @foreach ($PageTitle as $key => $item)
                    @if ($key === 5)
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
                                        <h3><a href="{{route('webview.player_details',$team->id)}}">{{ $team->name_english }}</a></h3>
                                        <h4> {{ $team->desig_english }}</h4>
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
    <section class="contact-section padding-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 sm-padding">
                    <div class="section-heading">
                        @foreach ($PageTitle as $key => $item)
                            @if ($key === 6)
                                <h3>{{ $item->title }}</h3>
                                <h2>{{ $item->sub_title }}</h2>
                                <p>{{ $item->sort_description }}</p>
                            @endif
                        @endforeach
                        <a href="{{ route('contact.us') }}" class="default-btn">Join Our Team
                            <span></span></a>
                    </div>
                </div>
                <div class="col-md-6 sm-padding">
                    <div class="contact-form ml-40">
                        <form action="https://html.dynamiclayers.net/te/galactic/contact.php" method="post"
                            id="ajax_contact" class="form-horizontal">
                            <div class="contact-form-group">
                                <div class="form-field">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="form-field">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control"
                                        placeholder="Email" required>
                                </div>
                                <div class="form-field message">
                                    <textarea id="message" name="message" cols="30" rows="4" class="form-control" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="form-field">
                                    <button id="submit" class="default-btn" type="submit">Send
                                        Massage<span></span></button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sponsor-section padding-bottom">
        <div class="container">
            <div class="outside-spacing">
                <div class="sponsor-carousel">
                    <div class="swiper-wrapper">
                        @foreach ($brands as $brand)
                            <div class="swiper-slide">
                                <img src="{{ asset($brand->image) }}" alt="client">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="shop-section padding-bottom">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                @foreach ($PageTitle as $key => $item)
                    @if ($key === 7)
                        <h3>{{ $item->title }}</h3>
                        <h2>{{ $item->sub_title }}</h2>
                        <p>{{ $item->sort_description }}</p>
                    @endif
                @endforeach
            </div>
            <div class="outside-spacing">
                <div class="shop-carousel">
                    <div class="swiper-wrapper">
                        @foreach ($projects as $project)
                            <div class="swiper-slide">
                                <div class="product-card">
                                    <div class="product-thumb">
                                        <img src="{{ asset($project->main_image) }}" alt="img">
                                        {{-- <a href="{{ asset('frontend') }}/#" class="badge in-stock"></a> --}}
                                        <a href="{{ route('project.details', $project->id) }}"
                                            class="default-btn">Details</a>
                                    </div>
                                    <div class="product-info">
                                        {{-- <div class="product-inner">
                                            <ul class="category">
                                                <li><a href="{{ asset('frontend') }}/#">Steering</a></li>
                                            </ul>
                                            <ul class="rating">
                                                <li><i class="las la-star"></i></li>
                                                <li><i class="las la-star"></i></li>
                                                <li><i class="las la-star"></i></li>
                                                <li><i class="las la-star"></i></li>
                                                <li><i class="las la-star"></i></li>
                                            </ul>
                                        </div> --}}
                                        <h3><a
                                                href="{{ route('project.details', $project->id) }}">{{ $project->title_english }}</a>
                                        </h3>
                                        <h4 class="price">${{ $project->price }}</h4>
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
    <section class="blog-section">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                @foreach ($PageTitle as $key => $item)
                @if ($key === 8)
                    <h3>{{ $item->title }}</h3>
                    <h2>{{ $item->sub_title }}</h2>
                    <p>{{ $item->sort_description }}</p>
                @endif
            @endforeach
            </div>
            <div class="row grid-post">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 padding-15 wow fade-in-bottom">
                        <div class="post-card">
                            <div class="post-thumb">
                                <img src="{{ asset($blog->main_image) }}" alt="post">
                                <a href="{{ asset($blog->main_image) }}" class="post-category"></a>
                            </div>
                            <div class="post-content-wrap">
                                <ul class="post-meta">
                                    <li><i class="las la-calendar"></i>{{ $blog->created_at->format('F d, Y') }}</li>
                                    <li><i class="las la-user"></i></li>
                                </ul>
                                <div class="post-content">
                                    <h3><a href="{{ route('blog.details', $blog->id) }}">{{ $blog->title_english }}</a>
                                    </h3>
                                    <p> @php
                                        $blog_short_des_eng = strip_tags($blog->short_des_eng);
                                        $words = str_word_count($blog_short_des_eng, 1);
                                        $shortenedText = implode(' ', array_slice($words, 0, 15));
                                    @endphp
                                        @if (count($words) > 15)
                                            {!! $shortenedText !!}...
                                            {{-- {{ strip_tags($shortenedText) }} --}}
                                        @else
                                            {{ strip_tags($blog->short_des_eng) }}
                                        @endif
                                    </p>
                                    <a href="{{ route('blog.details', $blog->id) }}" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
