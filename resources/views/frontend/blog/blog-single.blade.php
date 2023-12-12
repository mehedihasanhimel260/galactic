@extends('frontend.layout')
@section('content')
    <section class="page-header single">
        <div class="page-header-shape">
            <div class="shape"></div>
            <div class="shape center"></div>
            <div class="shape center back"></div>
            <div class="shape right"></div>
        </div>
        <div class="container">
            <div class="page-header-info">
                <h4>Blog Details</h4>
                <h2>Microsoft Xbox Publishes First <br>Transparency Report!</h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
                <ul class="post-meta">
                    <li><i class="las la-user"></i> </li>
                    <li><i class="las la-calendar"></i>{{ $blog_details->created_at->format('F d, Y') }}</li>
                    <li><i class="las la-comments"></i> </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="blog-section blog-page padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="post-details">
                        <div class="post-thumb"><img src="{{ asset($blog_details->main_image) }}" alt="img"></div>
                        <p> {!! $blog_details->short_des_eng ?? null !!}
                            {!! $blog_details->long_des1_eng ?? null !!}
                            {!! $blog_details->long_des2_eng ?? null !!}</p>
                        <ul class="tags">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Startup</a></li>
                            <li><a href="#">Design</a></li>
                        </ul>

                        <ul class="post-navigation">
                            @if (!empty($previousPost->main_image))
                                <li><a href="{{ route('blog.details', $previousPost->id) }}"><span><i
                                                class="las la-angle-left"></i>Previous</span>{{ $previousPost->title_english }}</a>
                                </li>
                            @endif

                            @if (!empty($nextPost->main_image))
                                <li><a href="{{ route('blog.details', $nextPost->id) }}"><span>Next<i
                                                class="las la-angle-right"></i></span>{{ $nextPost->title_english }}</a>
                                </li>
                            @endif

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
