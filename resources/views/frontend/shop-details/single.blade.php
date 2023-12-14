@extends('frontend.layout')
@section('content')
    <section class="shop-section single padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 sm-padding product-details-wrap">
                    <div class="swiper product-gallary">
                        <img src="{{ asset($blog_details->main_image) }}" />
                    </div>
                </div>
                <div class="col-md-6 sm-padding">
                    <div class="product-details">
                        <div class="product-info">
                            <div class="product-inner">
                                {{-- <ul class="category">
                                    <li><a href="#">Steering</a></li>
                                </ul>
                                <ul class="rating">
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                </ul> --}}
                            </div>
                            <h3>{{ $blog_details->title_english }}</h3>
                            <h4 class="price">${{ $blog_details->price }} <span> </span></h4>
                            <p> {!! $blog_details->short_des_eng ?? null !!}</p>
                            <div class="product-btn">
                                <div><a href="tel:{{ $website->phone }}" class="purchase-btn">Call: </a></div>
                                <form>
                                    <h2><a href="tel:{{ $website->phone }}"> {{ $website->phone }}</a>
                                    </h2>
                                </form>
                            </div>
                            {{-- <ul class="product-meta">
                                <li>SKU:<a href="#">ANQ4O6DWDZ</a></li>
                                <li>Categories:<a href="#">Bag</a> <a href="#">Womens</a></li>
                                <li>Tags:<a href="#">Dress</a> <a href="#">Pants</a></li>
                            </ul> --}}
                            <ul class="social-list">
                                <li><a href="{{ $website->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $website->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $website->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ $website->youtube }}"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-description padding-top">
        <div class="container">
            <ul class="nav tab-navigation" id="product-tab-navigation" role="tablist">
                <li role="presentation">
                    <button class="active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                        role="tab" aria-controls="home" aria-selected="true">Description</button>
                </li>
                <li role="presentation">
                    <button id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab"
                        aria-controls="contact" aria-selected="false">Reviews (2)</button>
                </li>
            </ul>
            <div class="tab-content" id="product-tab-content">
                <div class="tab-pane fade show active description" id="home" role="tabpanel"
                    aria-labelledby="home-tab">
                    <p>
                        {!! $blog_details->long_des1_eng ?? null !!}
                        {!! $blog_details->long_des2_eng ?? null !!}</p>
                </div>
                <div class="tab-pane fade review" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <ul class="comment-list">
                        {{-- <li>
                            <div class="comment-thumb"><img src="{{ asset('frontend') }}/assets/img/comment-1.png"
                                    alt="img"></div>
                            <div class="comment-text">
                                <div class="comment-author">
                                    <h3><span>January 5, 2022</span>Elliot Alderson</h3>
                                    <ul class="rating">
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                    </ul>
                                </div>
                                <p>Our versatile team is built of designers, developers and digital marketers.</p>
                            </div>
                        </li>
                        <li>
                            <div class="comment-thumb"><img src="{{ asset('frontend') }}/assets/img/comment-2.png"
                                    alt="img"></div>
                            <div class="comment-text">
                                <div class="comment-author">
                                    <h3><span>January 5, 2022</span>Melania Trump</h3>
                                    <ul class="rating">
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                    </ul>
                                </div>
                                <p>Our versatile team is built of designers, developers and digital marketers.</p>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
