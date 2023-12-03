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
            <h4>About Us</h4>
            <h2>About Galactic Squad</h2>
            <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                committed team.</p>
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
                        <h2>The next <span>generation</span> of gaming is here.</h2>
                        <p>Online gaming is simply the playing of a video game over the internet, usually with
                            friends. Online games can be played on any number of devices from dedicated video games
                            consoles.</p>
                        <p class="mt-20">For these reasons, it’s important that trusted adults educate themselves
                            around what online gaming is and how they can ensure children play safely.</p>
                        <a href="contact.html" class="default-btn">Join Our Team</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 sm-padding">
                <img src="{{ asset('frontend') }}/assets/img/about-characters.png" alt="img">
            </div>
        </div>
    </div>
</section>
<section class="latest-matches padding-bottom">
    <div class="container">
        <div class="section-heading-group mb-40">
            <div class="section-heading">
                <h3>Our Gameplay</h3>
                <h2>Our Recent <span>Gameplay</span></h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
            </div>
            <div><a href="upcoming-matches.html" class="default-btn">View All Matches</a></div>
        </div>

        <div class="latest-matches-lists">
            <div class="latest-matches-list">
                <div class="matches-thumb">
                    <img src="{{ asset('frontend') }}/assets/img/recent-match-1.jpg" alt="thumb">
                </div>
                <div class="latest-match-info">
                    <a href="#" class="match-category">E-Football</a>
                    <h3>FIFA eWorld Cup 2022</h3>
                    <ul class="match-meta">
                        <li><a href="#">Dec.06.2019 - 02:30 pm</a></li>
                    </ul>
                </div>
                <div class="watch-info">
                    <a class="dl-video-popup" data-autoplay="true" data-vbtype="video"
                        href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-twitch"></i>Watch
                        Streem</a>
                </div>
            </div>
        </div>

        <div class="latest-matches-lists">
            <div class="latest-matches-list">
                <div class="matches-thumb">
                    <img src="{{ asset('frontend') }}/assets/img/recent-match-2.jpg" alt="thumb">
                </div>
                <div class="latest-match-info">
                    <a href="#" class="match-category">Counter Strike</a>
                    <h3>Legendary Battles</h3>
                    <ul class="match-meta">
                        <li><a href="#">Dec.06.2019 - 02:30 pm</a></li>
                    </ul>
                </div>
                <div class="watch-info">
                    <a class="dl-video-popup" data-autoplay="true" data-vbtype="video"
                        href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-youtube"></i>Watch
                        Streem</a>
                </div>
            </div>
        </div>

        <div class="latest-matches-lists">
            <div class="latest-matches-list">
                <div class="matches-thumb">
                    <img src="{{ asset('frontend') }}/assets/img/recent-match-3.jpg" alt="thumb">
                </div>
                <div class="latest-match-info">
                    <a href="#" class="match-category">Valorant</a>
                    <h3>Global Championship ii</h3>
                    <ul class="match-meta">
                        <li><a href="#">Dec.06.2019 - 02:30 pm</a></li>
                    </ul>
                </div>
                <div class="watch-info">
                    <a class="dl-video-popup" data-autoplay="true" data-vbtype="video"
                        href="https://www.youtube.com/watch?v=tv7LfFeamsc"><i class="lab la-twitch"></i>Watch
                        Streem</a>
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
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/assets/img/client-1.png" alt="client">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/assets/img/client-2.png" alt="client">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/assets/img/client-3.png" alt="client">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/assets/img/client-4.png" alt="client">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/assets/img/client-5.png" alt="client">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend') }}/assets/img/client-6.png" alt="client">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="team-section padding-bottom">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h3>Our Gammers</h3>
            <h2>Meet Our <span>Gamers</span></h2>
            <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                committed team.</p>
        </div>
        <div class="outside-spacing">
            <div class="team-carousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="{{ asset('frontend') }}/assets/img/team-1.png" alt="thumb">
                                <div class="shape-wrap">
                                    <div class="shape shape-1"></div>
                                    <div class="shape shape-2"></div>
                                    <div class="shape shape-3"></div>
                                    <div class="shape shape-4"></div>
                                </div>
                            </div>
                            <div class="team-content">
                                <span class="whte-shape"></span>
                                <h3><a href="player-details.html">Brandon Larned</a></h3>
                                <h4>Overwatch</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="{{ asset('frontend') }}/assets/img/team-2.png" alt="thumb">
                                <div class="shape-wrap">
                                    <div class="shape shape-1"></div>
                                    <div class="shape shape-2"></div>
                                    <div class="shape shape-3"></div>
                                    <div class="shape shape-4"></div>
                                </div>
                            </div>
                            <div class="team-content">
                                <span class="whte-shape"></span>
                                <h3><a href="player-details.html">Félix Lengyel</a></h3>
                                <h4>Valorant</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="{{ asset('frontend') }}/assets/img/team-3.png" alt="thumb">
                                <div class="shape-wrap">
                                    <div class="shape shape-1"></div>
                                    <div class="shape shape-2"></div>
                                    <div class="shape shape-3"></div>
                                    <div class="shape shape-4"></div>
                                </div>
                            </div>
                            <div class="team-content">
                                <span class="whte-shape"></span>
                                <h3><a href="player-details.html">Sasha Hostyn</a></h3>
                                <h4>StarCraft II</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="{{ asset('frontend') }}/assets/img/team-4.png" alt="thumb">
                                <div class="shape-wrap">
                                    <div class="shape shape-1"></div>
                                    <div class="shape shape-2"></div>
                                    <div class="shape shape-3"></div>
                                    <div class="shape shape-4"></div>
                                </div>
                            </div>
                            <div class="team-content">
                                <span class="whte-shape"></span>
                                <h3><a href="player-details.html">Zaqueri Black</a></h3>
                                <h4>Call of Duty</h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="{{ asset('frontend') }}/assets/img/team-5.png" alt="thumb">
                                <div class="shape-wrap">
                                    <div class="shape shape-1"></div>
                                    <div class="shape shape-2"></div>
                                    <div class="shape shape-3"></div>
                                    <div class="shape shape-4"></div>
                                </div>
                            </div>
                            <div class="team-content">
                                <span class="whte-shape"></span>
                                <h3><a href="player-details.html">Fredrik Johanson</a></h3>
                                <h4>Counter Strike</h4>
                            </div>
                        </div>
                    </div>
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
            <h3>Connect With Our Gaming Team!</h3>
            <h2>Join with us for upcoming<br>gaming tournaments!</h2>
            <a href="contact.html" class="default-btn">Join Our Team</a>
        </div>
    </div>
</section>
@endsection
