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
                <h4>Career Form</h4>
                <h2>Application</h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
            </div>
        </div>
    </section>
    <section class="checkout-section padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 sm-padding">
                    <img id="output" />
                    <form action="{{ route('tech_web_gaming_career_apply_store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <h2>Your Details</h2>
                        <div class="checkout-form mb-30">
                            <div class="form-field">
                                <input type="text" id="firstname" name="name" class="form-control" placeholder="Name"
                                    required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="lastname" name="number" class="form-control"
                                    placeholder="017xxxx0000" required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="lastname" name="subject" class="form-control"
                                    placeholder="Sub: Apply of .......Position" required>
                            </div>
                            <div class="form-field">
                                <input type="file" name="cv" class="form-control"
                                    placeholder="Sub: Apply of .......Position" required>
                            </div>

                            <div class="additional-info mb-30">
                                <h2>Cover Letter</h2>
                                <div class="form-field">
                                    <textarea id="message" name="cover_letter" cols="30" rows="3" class="form-control" placeholder=""></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="payment-method">
                                <button type="submit" class="default-btn">Submit Now <span
                                        style="top: 421px; left: 129px;"></span><span
                                        style="top: 421px; left: 129px;"></span></button>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
