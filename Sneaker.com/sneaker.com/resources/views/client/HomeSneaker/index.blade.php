@extends('client.layout.index')

@section('content')
    <div class="image_background1">
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">

            @foreach($slide as $sli)
            <div class="single-hero-items set-bg" data-setbg="<?php echo asset('public/upload/slide')?>/{{$sli->image}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>{{$sli->type_product}}</span>
                            <h1>{{$sli->title}}</h1>
                            <p>{!!html_entity_decode($sli->content)!!}</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>{{$sli->action}} <span>{{$sli->discount}}</span></h2>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">

                @foreach($type_product as $type)
                    <div class="col-lg-3 col-sm-12">
                        <div class="single-banner">
                            <img src="<?php echo asset('public/upload/type_product')?>/{{$type->image}}" alt="" style="width: auto;height: 230px">
                            <div class="inner-text">
                                <h4>{{$type->name}}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="<?php echo asset('public/upload/complex/women-large.jpg')?>">
                        <h2>Vans’s</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">

                        @foreach($productvans as $vans)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="<?php echo asset('public/upload/product')?>/{{$vans->image}}" alt="">
                                @if($vans->promotion_price!=0)
                                    <div class="sale">Sale</div>
                                @endif
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>{{$vans->name}}</h5>
                                </a>
                                <div class="product-price">
                                    @if($vans->promotion_price!=0)
                                        {{number_format($vans->promotion_price)}}
                                        <span>{{number_format($vans->unit_price)}}</span>
                                    @else
                                        {{number_format($vans->unit_price)}}
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="<?php echo asset('public/upload/slide/Fl69_everest_mountain_sky_tops_96976_1920x1080.jpg')?>">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal Of The Week</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet,
                        consectetur adipisicing elit </p>
                    <div class="product-price">
                        $35.00
                        <span>/ HanBag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="#" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">

                        @foreach($productconverse as $converse)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="<?php echo asset('public/upload/product')?>/{{$converse->image}}" alt="">
                                @if($converse->promotion_price!=0)
                                    <div class="sale">Sale</div>
                                @endif
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>{{$converse->name}}</h5>
                                </a>
                                <div class="product-price">
                                    @if($converse->promotion_price!=0)
                                        {{number_format($converse->promotion_price)}}
                                        <span>{{number_format($converse->unit_price)}}</span>
                                    @else
                                        {{number_format($converse->unit_price)}}
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="<?php echo asset('public/upload/complex/man-large.jpg')?>">
                        <h2>Converse’s</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="<?php echo asset('public/upload/complex/ins.jpg')?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?php echo asset('public/upload/complex/ins1.jpg')?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?php echo asset('public/upload/complex/ins.jpg')?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?php echo asset('public/upload/complex/ins3.jpg')?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?php echo asset('public/upload/complex/ins.jpg')?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?php echo asset('public/upload/complex/ins1.jpg')?>">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($blog as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <a href="<?php echo url('blog-detail')?>/{{$blog->id}}"><img src="<?php echo asset('public/upload/new')?>/{{$blog->image}}" alt=""></a>
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    {{$blog->created_at}}
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    0
                                </div>
                            </div>
                            <a href="<?php echo url('blog-detail')?>/{{$blog->id}}">
                                <h4>{!! html_entity_decode($blog->title) !!}</h4>
                            </a>
                            <div style="overflow: hidden; text-overflow: ellipsis; width: auto; height: 50px">
                                {!! html_entity_decode($blog->contentt) !!}
                            </div>
                            <a href="#">xem thêm</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="<?php echo asset('public/upload/complex/icon-1.png')?>" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="<?php echo asset('public/upload/complex/icon-3.png')?>" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="<?php echo asset('public/upload/complex/icon-1.png')?>" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
    </div>
@endsection
