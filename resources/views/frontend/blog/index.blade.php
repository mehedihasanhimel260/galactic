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
                <h4>Blog Grid</h4>
                <h2>Gaming News &amp; Insights</h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
            </div>
        </div>
    </section>
    <section class="blog-section blog-page padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 sm-padding">
                    <div class="row grid-post">
                        @foreach ($blogs as $blog)
                            <div class="col-md-6 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <a href="{{ route('blog.details', $blog->id) }}">
                                            <img src="{{ asset($blog->main_image) }}" alt="post">
                                        </a>
                                    </div>
                                    <div class="post-content-wrap">
                                        <ul class="post-meta">
                                            <li><i class="las la-calendar"></i>{{ $blog->created_at->format('F d, Y') }}
                                            </li>
                                            <li><i class="las la-user"></i></li>
                                        </ul>
                                        <div class="post-content">
                                            <h3><a href="{{ route('blog.details', $blog->id) }}">
                                                    {{ $blog->title_english }}</a></h3>
                                            <p>
                                                @php
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

                                                ...
                                            </p>
                                            <a href="{{ route('blog.details', $blog->id) }}" class="read-more">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- {{ $blogs->links() }} --}}
                    {{-- <ul class="pagination-wrap text-left mt-40">
                        <li><a href="#"><i class="las la-arrow-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="las la-arrow-right"></i></a></li>
                    </ul> --}}
                    <ul class="pagination-wrap text-left mt-40">
                        @if ($blogs->currentPage() > 1)
                            <li><a href="{{ $blogs->previousPageUrl() }}"><i class="las la-arrow-left"></i></a></li>
                        @endif

                        @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                            <li><a href="{{ $blogs->url($i) }}" @if ($blogs->currentPage() === $i) class="active" @endif>{{ $i }}</a></li>
                        @endfor

                        @if ($blogs->hasMorePages())
                            <li><a href="{{ $blogs->nextPageUrl() }}"><i class="las la-arrow-right"></i></a></li>
                        @endif
                    </ul>


                </div>

                <div class="col-lg-4 sm-padding">
                    <div class="sidebar-widget">
                        <form action class="search-form">
                            <input type="text" class="form-control" placeholder="Search">
                            <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>



                    <div class="sidebar-widget">
                        <div class="widget-title">
                            <h3>Recent Articles</h3>
                        </div>
                        <ul class="thumb-post">
                            @foreach ($blogs as $blog)
                                <li>
                                    <div class="thumb">
                                        <img src="{{ asset($blog->main_image) }}" alt="thumb">
                                    </div>
                                    <div class="thumb-post-info">
                                        <h3><a
                                                href="{{ route('blog.details', $blog->id) }}">{{ $blog->title_english }}</a>
                                        </h3>
                                        <a href="{{ route('blog.details', $blog->id) }}"
                                            class="date">{{ $blog->created_at->format('F d, Y') }}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar-widget">
                        <div class="widget-title">
                            <h3>Tags</h3>
                        </div>
                        <ul class="tags">
                            <li><a href="#">business</a></li>
                            <li><a href="#">marketing</a></li>
                            <li><a href="#">startup</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">consulting</a></li>
                            <li><a href="#">strategy</a></li>
                            <li><a href="#">development</a></li>
                            <li><a href="#">tips</a></li>
                            <li><a href="#">Seo</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
