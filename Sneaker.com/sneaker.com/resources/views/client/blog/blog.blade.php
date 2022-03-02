@extends('client.layout.index')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search . . .  ">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Picnic</a></li>
                                <li><a href="#">Model</a></li>
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>Recent Post</h4>
                            <div class="recent-blog">
                                <hr>

                                @foreach($blogg as $bl)
                                <a href="<?php echo url('blog-detail')?>/{{$bl->id}}    " class="rb-item">
                                    <div class="rb-pic">
                                        <img src="<?php echo asset('public/upload/new')?>/{{$bl->image}}" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>{!! html_entity_decode($bl->title) !!}</h6>
                                        <p>Fashion <span>- {{ date('j F, Y', strtotime($bl->created_at)) }}</span></p>
                                    </div>
                                </a>
                                    <hr>
                                @endforeach

                            </div>
                        </div>
                        <div class="blog-tags">
                            <h4>Product Tags</h4>
                            <div class="tag-item">
                                <a href="#">Towel</a>
                                <a href="#">Shoes</a>
                                <a href="#">Coat</a>
                                <a href="#">Dresses</a>
                                <a href="#">Trousers</a>
                                <a href="#">Men's hats</a>
                                <a href="#">Backpack</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">

                        @foreach($blog as $bl)
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="<?php echo asset('public/upload/new')?>/{{$bl->image}}" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="<?php echo url('blog-detail')?>/{{$bl->id}}">
                                        <h4>{!! html_entity_decode($bl->title) !!}</h4>
                                    </a>
                                    <p>travel
                                        <span>
{{--                                            - {{$bl->created_at}}--}}
                                            - {{ date('j F, Y', strtotime($bl->created_at)) }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="loading-more" style="margin-left: 650px">
                                        {{$blog->links()}}
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
