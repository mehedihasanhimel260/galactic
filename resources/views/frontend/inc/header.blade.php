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
                        <li><a href="#">Tournament</a>
                            <ul>
                                <li><a href="{{ route('all.tunament.list') }}">Upcoming Tournament</a></li>
                                <li><a href="{{ route('webview.upcoming_matches') }}">Upcoming Matches</a></li>
                                <li><a href="{{ asset('frontend') }}/team-details.html">Team Details</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('all.blogs.list') }}">Blog</a> </li>
                        <li><a href="{{ route('all.recent_activity.list') }}">Recent Activity</a> </li>
                        <li><a href="{{ route('tech_web_gaming_career_apply') }}">Career</a></li>
                        <li><a href="{{ route('contact.us') }}">Contact</a></li>
                        <li>
                            @if (auth()->check())
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="btn" type="submit">Logout</button>
                                </form>
                            @endif

                        </li>
                    </ul>
                </div>
                <div class="header-right">

                    <a class="default-btn" href="{{ route('gaming_team_registation') }}">Join Our Team</a>

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
<marquee behavior="scroll" direction="left">
    <p style="float: left;margin-right: 10px; ">HTML marquee 1... </p>
    <p style="float: left;margin-right: 10px;">HTML marquee 2... </p>
    <p style="float: left;margin-right: 10px;">HTML marquee 3... </p>
    <p style="float: left;margin-right: 10px;">HTML marquee 4... </p>
</marquee>
