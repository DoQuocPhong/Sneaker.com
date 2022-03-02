@extends('client.layout.index')

@section('content')
    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2>{!! html_entity_decode($blog->title) !!}</h2>
                            <p>travel <span>- {{ date('j F, Y', strtotime($blog->created_at)) }}</span></p>
                        </div>
                        <div class="blog-large-pic">
                            <img src="<?php echo asset('public/upload/new')?>/{{$blog->image}}" alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <p>{!! html_entity_decode($blog->contentt) !!}
                            </p>
                        </div>

                        <div class="blog-more">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="<?php echo asset('public/upload/new')?>/{{$blog->image}}" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="<?php echo asset('public/upload/new')?>/{{$blog->image}}" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="<?php echo asset('public/upload/new')?>/{{$blog->image}}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="blog-quote">
                            <p>{!! html_entity_decode($blog->title) !!}</span></p>
                        </div>

                        <div class="tag-share">
                            <div class="details-tag">
                                <ul>
                                    <li><i class="fa fa-tags"></i></li>
                                    <li>Travel</li>
                                    <li>Beauty</li>
                                    <li>Fashion</li>
                                </ul>
                            </div>
                            <div class="blog-share">
                                <span>Share:</span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post">
                            <div class="row">

                                <div class="col-lg-5 col-md-6">
                                    <a href="<?php echo url('blog-detail')?>/{{$blog1->id}}" class="prev-blog">
                                        <div class="pb-pic">
                                            <i class="ti-arrow-left"></i>
                                            <img src="<?php echo asset('public/upload/new')?>/{{$blog1->image}}" alt="">
                                        </div>
                                        <div class="pb-text">
                                            <span>Previous Post:</span>
                                            <h5>{!! html_entity_decode($blog1->title) !!}</h5>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-5 offset-lg-2 col-md-6">
                                    <a href="<?php echo url('blog-detail')?>/{{$blog2->id}}" class="next-blog">
                                        <div class="nb-pic">
                                            <img src="<?php echo asset('public/upload/new')?>/{{$blog2->image}}" alt="">
                                            <i class="ti-arrow-right"></i>
                                        </div>
                                        <div class="nb-text">
                                            <span>Next Post:</span>
                                            <h5>{!! html_entity_decode($blog2->title) !!}</h5>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="posted-by">
                            <div class="pb-pic">
                                <img src="<?php echo asset('public/client/img/blog/post-by.png');?>" alt="">
                            </div>
                            <div class="pb-text">
                                <a href="#">
                                    <h5>Shane Lynch</h5>
                                </a>
                                <p>Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    amodo</p>
                            </div>
                        </div>
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Messages"></textarea>
                                        <button type="submit" class="site-btn">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
@endsection
