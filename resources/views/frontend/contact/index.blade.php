@extends('frontend.layout')
@section('content')
    <div class="map-wrapper">
        <iframe src="{{ $contact->map_link }}" width="100%" height="350" frameborder="0" style="border:0;"
            allowfullscreen></iframe>
    </div>
    <section class="contact-section padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 sm-padding">
                    <div class="contact-details-wrap">
                        <div class="contact-title">
                            @foreach ($PageTitle as $key => $item)
                                @if ($key === 0)
                                    <h2>{{ $item->title }}</h2>
                                    <p>{{ $item->sort_description }}</p>
                                @endif
                            @endforeach
                        </div>
                        <ul class="contact-details">
                            <li><i class="fas fa-map-marker-alt"></i>{{ $contact->address_english }}</li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:{{ $contact->email }}">{{ $contact->email }}
                                </a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 sm-padding">
                    <div class="contact-title">
                        @foreach ($PageTitle as $key => $item)
                            @if ($key === 1)
                                <h2>{{ $item->title }}</h2>
                                <p>{{ $item->sort_description }}</p>
                            @endif
                        @endforeach
                    </div>
                    <div class="">
                        <form action="{{ route('contactdata.store') }}" method="POST">
                            @csrf
                            <div class="contact-form-group">
                                <div class="form-field">
                                    <input type="text" name="name_english" class="form-control" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="form-field">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" name="phone" class="form-control " placeholder="Phone" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" name="subject_english" class="form-control " placeholder="Subject"
                                        required>
                                </div>
                                <div class="form-field message">
                                    <textarea name="message_english" cols="30" rows="4" class="form-control" placeholder="Message" required></textarea>
                                </div>
                                <div class="form-field">
                                    <button class="default-btn" type="submit">Send
                                        Massage<span></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
