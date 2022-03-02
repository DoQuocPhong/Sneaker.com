<!--Vans-->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-7">
                <h3>Vans</h3>
            </div>
            <div class="col-lg-5 col-md-5 text-right">
                <p>Find total {{count($productvans)}} Products</p>
            </div>
            <div class="col-sm-12">
                <hr>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="product-list">
    <div class="row">
        @foreach($productvans as $pro)
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <a href="<?php echo url('product')?>/{{$pro->id}}"><img src="<?php echo asset('public/upload/product')?>/{{$pro->image}}"
                                alt="" style="width: auto;height: 200px"></a>
                        @if($pro->promotion_price!=0)
                            <div class="sale">Sale</div>
                        @endif
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
{{--                            <a href="#"><i class="icon_heart_alt"></i></a>--}}
{{--                            <a onclick="AddHeart({{$pro->id}})" href="javascript:"><i class="icon_heart_alt"></i></a>--}}
                        </div>
                        <ul>
                            <li class="w-icon active"><a onclick="AddCart({{$pro->id}})"
                                                         href="javascript:"><i
                                        class="icon_bag_alt"></i></a>
                            </li>

                            <!--modal product-->
                            <li class="quick-view"><a href="#">
                                    <button type="button" class="btn btn-light" data-toggle="modal"
                                            data-target="#vans{{$pro->id}}"
                                            data-whatever="@mdo">+ Quick View
                                    </button>
                                </a></li>
                            <div class="modal fade" id="vans{{$pro->id}}" tabindex="-1"
                                 role="dialog"
                                 aria-labelledby="vanss{{$pro->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="vanss{{$pro->id}}">{{$pro->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="card">
                                                    <div class="container-fliud">
                                                        <div class="wrapper row">
                                                            <div class="preview col-md-6">
                                                                <div
                                                                    class="preview-pic tab-content">
                                                                    <div class="tab-pane active"
                                                                         id="picc{{$pro->id}}"><img
                                                                            src="<?php echo asset('public/upload/product')?>/{{$pro->image}}"/>
                                                                    </div>

                                                                    @foreach($images as $img)
                                                                        @if($img->id_product==$pro->id)
                                                                        <div class="tab-pane"
                                                                             id="pic{{$img->id}}"><img
                                                                                src="<?php echo asset('public/upload/image_product')?>/{{$img->image}}"/>
                                                                        </div>
                                                                        @endif
                                                                    @endforeach

                                                                </div>
                                                                <ul class="preview-thumbnail nav nav-tabs productt">
                                                                    <li class="active"><a
                                                                            data-target="#picc{{$pro->id}}"
                                                                            data-toggle="tab"><img
                                                                                src="<?php echo asset('public/upload/product')?>/{{$pro->image}}"/></a>
                                                                    </li>
                                                                    @foreach($images as $img)
                                                                        @if($img->id_product==$pro->id)
                                                                        <li><a
                                                                                data-target="#pic{{$img->id}}"
                                                                                data-toggle="tab"><img
                                                                                    src="<?php echo asset('public/upload/image_product')?>/{{$img->image}}"/></a>
                                                                        </li>
                                                                        @endif
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            <div class="details col-md-6">
                                                                <h3 class="product-title">{{$pro->name}}</h3>
                                                                <div class="rating">
                                                                    <div class="stars">
                                                                        <span
                                                                            class="fa fa-star checked"></span>
                                                                        <span
                                                                            class="fa fa-star checked"></span>
                                                                        <span
                                                                            class="fa fa-star checked"></span>
                                                                        <span
                                                                            class="fa fa-star"></span>
                                                                        <span
                                                                            class="fa fa-star"></span>
                                                                    </div>
                                                                    <span class="review-no">41 reviews</span>
                                                                </div>
                                                                <div>{!!html_entity_decode($pro->description)!!}</div>
                                                                <h4 class="price product-price pi-text">
                                                                    current price:
                                                                    <span>
                                                                        @if($pro->promotion_price!=0)
                                                                            {{number_format($pro->promotion_price)}}
                                                                        @else
                                                                            {{number_format($pro->unit_price)}}
                                                                        @endif
                                                                    </span></h4>
                                                                <p class="vote"><strong>91%</strong>
                                                                    of buyers enjoyed this product!
                                                                    <strong>(87 votes)</strong></p>
                                                                <h5 class="sizes">sizes:
                                                                    <span class="size"
                                                                          data-toggle="tooltip"
                                                                          title="small">s</span>
                                                                    <span class="size"
                                                                          data-toggle="tooltip"
                                                                          title="medium">m</span>
                                                                    <span class="size"
                                                                          data-toggle="tooltip"
                                                                          title="large">l</span>
                                                                    <span class="size"
                                                                          data-toggle="tooltip"
                                                                          title="xtra large">xl</span>
                                                                </h5>
                                                                <h5 class="colors">colors:
                                                                    <span
                                                                        class="color orange not-available"
                                                                        data-toggle="tooltip"
                                                                        title="Not In store"></span>
                                                                    <span
                                                                        class="color green"></span>
                                                                    <span class="color blue"></span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <div class="action">
                                                <a onclick="AddCart({{$pro->id}})"
                                                   href="javascript:">
                                                    <button class="add-to-cart btn btn-default"
                                                            type="button">add to cart
                                                    </button>
                                                </a>
                                                <button class="like btn btn-default" type="button">
                                                    <span class="fa fa-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end modal-->
                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
{{--                        <div class="catagory-name"><a href="<?php echo url('product')?>/{{$pro->id}}">{{$pro->name}}</a></div>--}}
                        <a href="<?php echo url('product')?>/{{$pro->id}}">
                            <h5>{{$pro->name}}</h5>
                        </a>
                        <div class="product-price">
                            @if($pro->promotion_price!=0)
                                {{number_format($pro->promotion_price)}} đ
                                <span>{{number_format($pro->unit_price)}} đ</span>
                            @else
                                {{number_format($pro->unit_price)}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        {{$productvans->links()}}
    </div>
</div>
<br>
