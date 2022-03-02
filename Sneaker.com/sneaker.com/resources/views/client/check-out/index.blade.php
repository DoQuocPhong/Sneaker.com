@extends('client.layout.index')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="<?php echo url('check-out')?>" class="checkout-form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="#" class="content-btn" data-toggle="modal" data-target="#exampleModal"
                               data-whatever="@mdo">Click Here To Login</a>
                        </div>

{{--                        @include('client.login.modal')--}}

                        <h4>Billing Details</h4>
                        <div class="place-order order-total">
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="fir">Fullname<span>*</span></label>
                                <input type="text" id="name" name="name">
                            </div>

                            <div class="col-lg-12">
                                <label>Gender</label>
                                    <!-- radio -->
                                <div class="custom-control custom-radio custom-control-inline col-6">
                                    <input type="radio" id="nam" name="gender" class="custom-control-input" value="male">
                                    <label class="custom-control-label" for="nam">Nam</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline col-6">
                                    <input type="radio" id="nu" name="gender" class="custom-control-input" value="female">
                                    <label class="custom-control-label" for="nu">Nữ</label>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label for="street">Address<span>*</span></label>
                                <input type="text" id="address" name="address" class="street-first">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email Address<span>*</span></label>
                                <input type="text" id="email" name="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone<span>*</span></label>
                                <input type="text" id="phone" name="phone">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Note</label>
                                <textarea type="text" id="note" name="note" style="border-color: #00e0e0; width: 500px; height: 300px" placeholder="Write something "></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Create an account?
                                        <input type="checkbox" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" placeholder="Enter Your Coupon Code">
                        </div>
                        @include('client.check-out.bill')
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
