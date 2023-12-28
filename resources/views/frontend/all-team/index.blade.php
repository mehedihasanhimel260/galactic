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
                <h4>All Gaming Team</h4>
                <h2>Explore Our Gears</h2>
                <p>Our success in creating business solutions is due in large part <br>to our talented and highly
                    committed team.</p>
            </div>
        </div>
    </section>
    <section class="shop-section padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 sm-padding">
                    <div class="row">
                        @foreach ($gamingteam as $item)
                            <div class="col-md-3 padding-15">
                                <div class="product-card">
                                    <div class="product-thumb">
                                        <img src="{{asset($item->logo)}}" alt="img">
                                        <!-- <a href="#" class="badge in-stock">In Stock</a> -->
                                        <ul class="shop-action">
                                            <li><a href="{{$item->link}}"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                        </ul>
                                        <!-- <a href="cart.html" class="default-btn">Team Leader: <br> Abdul Motin</a> -->
                                    </div>
                                    <div class="product-info">
                                        <div class="product-inner">
                                            <ul class="category">
                                                <li><a href="#">Taem Name</a></li>
                                            </ul>
                                            <!-- <ul class="rating">
                        <li><i class="las la-star"></i></li>
                        <li><i class="las la-star"></i></li>
                        <li><i class="las la-star"></i></li>
                        <li><i class="las la-star"></i></li>
                        <li><i class="las la-star"></i></li>
                    </ul> -->
                                        </div>
                                        <h3><a href="shop-details.html">{{$item->team_name}}</a></h3>
                                        <h4 class="price">Team Leader:{{$item->player_name_1}}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <ul class="pagination-wrap text-left mt-40">
                        <li><a href="#"><i class="las la-arrow-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="las la-arrow-right"></i></a></li>
                    </ul>

                </div>

            </div>
        </div>
    </section>
@endsection
