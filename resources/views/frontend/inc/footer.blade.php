@php
    $logos = App\Models\Logo::latest()->first();
    $projects = \App\Models\Project::where('status', 1)
        ->latest()
        ->take(4)
        ->get();
    $WebsiteLink = App\Models\WebsiteLink::latest()->first();
    $footer = App\Models\Footer::latest()->first();
@endphp


<footer class="footer-section">
    <div class="container">
        <div class="row footer-items">
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-item">
                    <a class="brand" href="/"><img src="{{ asset($logos->frontend_footer_image) }}"
                            alt="logo"></a>
                    <p>Our success in creating business solutions is due in large part to our talented and highly
                        committed team.</p>
                    <ul class="social-list">
                        <li><a href="{{ $WebsiteLink->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $WebsiteLink->twitter }}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $WebsiteLink->instagram }}"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="{{ $WebsiteLink->youtube }}"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-item footer-list">
                    <div class="widget-title">
                        <h3>Usefull Links</h3>
                    </div>
                    <ul class="footer-links">
                        <li><a href="{{ asset('frontend') }}/#">Tournaments</a></li>
                        <li><a href="{{ asset('frontend') }}/#">Help Center</a></li>
                        <li><a href="{{ asset('frontend') }}/#">Privacy and Policy</a></li>
                        <li><a href="{{ asset('frontend') }}/#">Terms of Use</a></li>
                        <li><a href="{{ asset('frontend') }}/#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-item">
                    <div class="widget-title">
                        <h3>Contact Us</h3>
                    </div>
                    <ul class="footer-contact">
                        <li><span>Location:</span>{{ $WebsiteLink->address_english }}</li>
                        <li><span>Join Us:</span><a
                                href="mailto:{{ $WebsiteLink->email }}">{{ $WebsiteLink->email }}</a>
                        </li>
                        <li><span>Phone:</span> <a href="tel:{{ $WebsiteLink->phone }}">{{ $WebsiteLink->phone }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-item subscribe-wrap">
                    <div class="widget-title">
                        <h3>Newsletter Signup</h3>
                    </div>
                    <form action="#" class="subscribe-form">
                        <input class="form-control" type="email" name="email" placeholder="Your Email" required>
                        <input type="hidden" name="action" value="mailchimpsubscribe">
                        <button class="submit">Subscribe Now</button>
                        <div class="clearfix"></div>
                        <div id="subscribe-result">
                            <div class="subscription-success"></div>
                            <div class="subscription-error"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <p>© <span id="currentYear"></span>{{ $footer->copy_right_text }}</p>
        </div>
    </div>

</footer>
