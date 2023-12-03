@php

@endphp


<footer class="footer-section">
    <div class="container">
        <div class="row footer-items">
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-item">
                    <a class="brand" href="index.html"><img src="{{ asset('frontend') }}/assets/img/logo.png"
                            alt="logo"></a>
                    <p>Our success in creating business solutions is due in large part to our talented and highly
                        committed team.</p>
                    <ul class="social-list">
                        <li><a href="{{ asset('frontend') }}/#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ asset('frontend') }}/#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ asset('frontend') }}/#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="{{ asset('frontend') }}/#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-item footer-list">
                    <div class="widget-title">
                        <h3>Usefull Links</h3>
                    </div>
                    <ul class="footer-links">
                        <li><a href="{{ asset('frontend') }}/upcoming-matches.html">Tournaments</a></li>
                        <li><a href="{{ asset('frontend') }}/faq-page.html">Help Center</a></li>
                        <li><a href="{{ asset('frontend') }}/about.html">Privacy and Policy</a></li>
                        <li><a href="{{ asset('frontend') }}/about.html">Terms of Use</a></li>
                        <li><a href="{{ asset('frontend') }}/contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-item">
                    <div class="widget-title">
                        <h3>Contact Us</h3>
                    </div>
                    <ul class="footer-contact">
                        <li><span>Location:</span>153 Williamson Plaza, Maggieberg, MT 09514</li>
                        <li><span>Join Us:</span><a href="https://html.dynamiclayers.net/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="f3ba9d959cb3aa9c8681b49e929a9fc1c7dd909c9e">[email&#160;protected]</a>
                        </li>
                        <li><span>Phone:</span>+1 (062) 109-9222</li>
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
            <p>© <span id="currentYear"></span> ThemeEaster All Rights Reserved.</p>
        </div>
    </div>

</footer>
