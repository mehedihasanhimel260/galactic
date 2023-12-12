@php

    $WebsiteLink = App\Models\WebsiteLink::latest()->first();
    $logos = App\Models\Logo::latest()->first();
    $services = \App\Models\Service::get();
    $projects = \App\Models\Project::where('status', 1)->get();
    $images = \App\Models\ImageGallery::where('status', 1)
        ->latest('id', 'DESC')
        ->get();
@endphp


<header class="header">
    <div class="primary-header">
        <div class="container">
            <div class="primary-header-inner">
                <div class="header-logo">
                    <a href="/">
                        <img class="logo" src="{{ asset($logos->frontend_logo_image) }}" alt="Logo">
                    </a>
                </div>
                <div class="header-menu-wrap">
                    <ul class="nav-menu">
                        <li class="active"><a href="/">Home</a>
                        </li>

                        <li><a href="{{ route('about.details') }}">About Us</a></li>
                        <li><a href="{{ asset('frontend') }}/#">Tournament</a>
                            <ul>
                                <li><a href="{{ asset('frontend') }}/upcoming-matches.html">Upcoming Matches</a></li>
                                <li><a href="{{ asset('frontend') }}/stream-schedule.html">Tournament Schedule</a></li>
                                <li><a href="{{ asset('frontend') }}/match-details.html">Match Details</a></li>
                                <li><a href="{{ asset('frontend') }}/player-details.html">Player Details</a></li>
                                <li><a href="{{ asset('frontend') }}/team-details.html">Team Details</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('all.blogs.list') }}">Blog</a> </li>
                        <li><a href="{{ route('all.recent_activity.list') }}">Recent Activity</a> </li>

                        <li><a href="{{ route('contact.us') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="header-right">

                    <a class="default-btn" href="{{ asset('frontend') }}/checkout.html">Join Our Team</a>

                    <div class="mobile-menu-icon">
                        <div class="burger-menu">
                            <div class="line-menu line-half first-line"></div>
                            <div class="line-menu"></div>
                            <div class="line-menu line-half last-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
