@extends('frontend.layout')
@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h4>Enjoy The Games</h4>
                <h1>Epic Games Made For<br> True Gamers!</h1>
                <div class="btn-group">
                    <a href="{{ route('contact.us') }}" class="default-btn">Join With Us</a>
                    <a data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=tv7LfFeamsc"
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
                    <img src="{{ asset('frontend') }}/assets/img/game-charecters.png" alt="thumb">
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
                <h3>Upcoming matches</h3>
                <h2>Battles Extreme <br> Masters <span>Tournament</span></h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
            </div>
            <ul class="upcoming-matches">
                <li class="matches-list">
                    <div class="participate-team wow fade-in-left" data-wow-delay="200ms">
                        <img src="{{ asset('frontend') }}/assets/img/team-logo-1.png" alt="team">
                        <h3><a href="{{ asset('frontend') }}/team-details.html">Purple Death Cadets</a></h3>
                        <div class="match-info">Group 04 | Match 06th</div>
                    </div>
                    <div class="match-time">
                        <h3>10:00 <span>25TH May 2024</span></h3>
                        <ul class="watch-btn">
                            <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video"
                                    href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-youtube"></i></a>
                            </li>
                            <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video"
                                    href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-twitch"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="participate-team oponent wow fade-in-right" data-wow-delay="200ms">
                        <h3><a href="{{ asset('frontend') }}/team-details.html">Trigger Brain Squad</a></h3>
                        <div class="match-info">Group 04 | Match 06th</div>
                        <img src="{{ asset('frontend') }}/assets/img/team-logo-2.png" alt="team">
                    </div>
                </li>
                <li class="matches-list">
                    <div class="participate-team wow fade-in-left" data-wow-delay="400ms">
                        <img src="{{ asset('frontend') }}/assets/img/team-logo-3.png" alt="team">
                        <h3><a href="{{ asset('frontend') }}/team-details.html">The Black Hat Hackers</a></h3>
                        <div class="match-info">Group 04 | Match 06th</div>
                    </div>
                    <div class="match-time">
                        <h3>12:30 <span>10TH Jan 2024</span></h3>
                        <ul class="watch-btn">
                            <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video"
                                    href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-youtube"></i></a>
                            </li>
                            <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video"
                                    href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-twitch"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="participate-team oponent wow fade-in-right" data-wow-delay="400ms">
                        <h3><a href="{{ asset('frontend') }}/team-details.html">Your Worst Nightmare</a></h3>
                        <div class="match-info">Group 05 | Match 02nd</div>
                        <img src="{{ asset('frontend') }}/assets/img/team-logo-4.png" alt="team">
                    </div>
                </li>
                <li class="matches-list">
                    <div class="participate-team wow fade-in-left" data-wow-delay="600ms">
                        <img src="{{ asset('frontend') }}/assets/img/team-logo-5.png" alt="team">
                        <h3><a href="{{ asset('frontend') }}/team-details.html">Witches and Quizards</a></h3>
                        <div class="match-info">Group 02 | Match 03rd</div>
                    </div>
                    <div class="match-time">
                        <h3>04:20 <span>15TH Dec 2024</span></h3>
                        <ul class="watch-btn">
                            <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video"
                                    href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-youtube"></i></a>
                            </li>
                            <li><a class="dl-video-popup" data-autoplay="true" data-vbtype="video"
                                    href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-twitch"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="participate-team oponent wow fade-in-right" data-wow-delay="600ms">
                        <h3><a href="{{ asset('frontend') }}/team-details.html">Resting Bitch Faces</a></h3>
                        <div class="match-info">Group 02 | Match 03rd</div>
                        <img src="{{ asset('frontend') }}/assets/img/team-logo-6.png" alt="team">
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="watch-live-section padding-bottom">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                <h3>Watch The Gameplay</h3>
                <h2>Watch Live <span>Streaming</span></h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
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
                <h3>Our Gammers</h3>
                <h2>Meet Our <span>Gamers</span></h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
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
                        <h3>Send Us a Mail</h3>
                        <h2>Join Us As a Super Fans and Get all <span>the Benefits</span></h2>
                        <p>Our success in creating business solutions is due in large part <br>to our talented and
                            highly committed team.</p>
                        <a href="{{ asset('frontend') }}/contact.html" class="default-btn">Join Our Team
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
    {{-- <section class="shop-section padding-bottom">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                <h3>Online Gaming Shop</h3>
                <h2>Explore Our <span>Gears</span></h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
            </div>
            <div class="outside-spacing">
                <div class="shop-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <img src="{{ asset('frontend') }}/assets/img/product-1.png" alt="img">
                                    <a href="{{ asset('frontend') }}/#" class="badge in-stock">In Stock</a>
                                    <a href="{{ asset('frontend') }}/cart.html" class="default-btn">Add To Cart</a>
                                </div>
                                <div class="product-info">
                                    <div class="product-inner">
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
                                    </div>
                                    <h3><a href="{{ asset('frontend') }}/shop-details.html">Steering Wheel</a></h3>
                                    <h4 class="price">$69.00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <img src="{{ asset('frontend') }}/assets/img/product-2.png" alt="img">
                                    <a href="{{ asset('frontend') }}/#" class="badge hot">Hot</a>
                                    <a href="{{ asset('frontend') }}/cart.html" class="default-btn">Add To Cart</a>
                                </div>
                                <div class="product-info">
                                    <div class="product-inner">
                                        <ul class="category">
                                            <li><a href="{{ asset('frontend') }}/#">Mouse</a></li>
                                        </ul>
                                        <ul class="rating">
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                        </ul>
                                    </div>
                                    <h3><a href="{{ asset('frontend') }}/shop-details.html">Fantech Mouse</a></h3>
                                    <h4 class="price">$49.00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <img src="{{ asset('frontend') }}/assets/img/product-3.png" alt="img">
                                    <a href="{{ asset('frontend') }}/#" class="badge sale">-70%</a>
                                    <a href="{{ asset('frontend') }}/cart.html" class="default-btn">Add To Cart</a>
                                </div>
                                <div class="product-info">
                                    <div class="product-inner">
                                        <ul class="category">
                                            <li><a href="{{ asset('frontend') }}/#">Console</a></li>
                                        </ul>
                                        <ul class="rating">
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                        </ul>
                                    </div>
                                    <h3><a href="{{ asset('frontend') }}/shop-details.html">Targus Console</a></h3>
                                    <h4 class="price">$39.00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <img src="{{ asset('frontend') }}/assets/img/product-4.png" alt="img">
                                    <a href="{{ asset('frontend') }}/#" class="badge hot">Hot</a>
                                    <a href="{{ asset('frontend') }}/cart.html" class="default-btn">Add To Cart</a>
                                </div>
                                <div class="product-info">
                                    <div class="product-inner">
                                        <ul class="category">
                                            <li><a href="{{ asset('frontend') }}/#">Controller</a></li>
                                        </ul>
                                        <ul class="rating">
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                        </ul>
                                    </div>
                                    <h3><a href="{{ asset('frontend') }}/shop-details.html">Xbox Controller</a></h3>
                                    <h4 class="price">$19.00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <img src="{{ asset('frontend') }}/assets/img/product-5.png" alt="img">
                                    <a href="{{ asset('frontend') }}/#" class="badge out-stock">Out Of Stock</a>
                                    <a href="{{ asset('frontend') }}/cart.html" class="default-btn">Add To Cart</a>
                                </div>
                                <div class="product-info">
                                    <div class="product-inner">
                                        <ul class="category">
                                            <li><a href="{{ asset('frontend') }}/#">Chair</a></li>
                                        </ul>
                                        <ul class="rating">
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                        </ul>
                                    </div>
                                    <h3><a href="{{ asset('frontend') }}/shop-details.html">Ergonomic Chair</a></h3>
                                    <h4 class="price">$39.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                    <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="blog-section">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fade-in-bottom" data-wow-delay="200ms">
                <h3>What's on our mind</h3>
                <h2>News and <span>Headlines</span></h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
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
