@if(Session::has("Cart") != null)
<div class="place-order">
    <h4>Your Order</h4>
    <div class="order-total col-12">
        <ul class="order-table">
            <li>
                <div class="row">
                    <div class="col-5">
                        Product
                    </div>
                    <div class="col-2">
                        Image
                    </div>
                    <div class="col-2">
                        Quanty
                    </div>
                    <div class="col-3">
                        <span>Unit_price</span>
                    </div>
                </div>
            </li>


            @foreach(Session::get('Cart')->products as $item)
                <li class="fw-normal">
                    <div class="row">
                        <div class="col-5">
                            {{$item['productInfor']->name}}
                        </div>
                        <div class="col-2">
                            <img
                                src="<?php echo asset('public/upload/product')?>/{{$item['productInfor']->image}}"
                                alt="" style="width: 210px">
                        </div>
                        <div class="col-2" align="center">
                            x {{$item['quanty']}}
                        </div>
                        <div class="col-3">
                            <span>
                                @if($item['productInfor']->promotion_price!=0)
                                    <p>{{number_format($item['productInfor']->promotion_price)}}đ</p>
                                @else
                                    <p>{{number_format($item['productInfor']->unit_price)}}đ</p>
                                @endif

                            </span>
                        </div>
                    </div>
                </li>
            @endforeach
            <li class="fw-normal">
                <div class="row">
                    <div class="col-7">
                        <p>Total quanty</p>
                    </div>
                    <div class="col-2" style="text-align: center">
                        {{Session::get('Cart')->totalQty}}
                    </div>
                    <div class="col-3">
                    </div>
                </div>
            </li>
            <li class="total-price">Total price<span>{{number_format(Session::get('Cart')->totalPrice)}}đ</span></li>
        </ul>
        <div class="col-lg-12">
            <label for="street">Note</label>
            <textarea type="text" id="note" name="notee" style="border-color: #00e0e0; width: 480px; height: 100px" placeholder="Write something "></textarea>
        </div>
        <div class="payment-check">
            <div class="pc-item">
                <label for="pc-check">
                    Cheque Payment
                    <input type="checkbox" id="pc-check">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="pc-item">
                <label for="pc-paypal">
                    Paypal
                    <input type="checkbox" id="pc-paypal">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
        <div class="order-btn">
            <button type="submit" class="site-btn place-btn">Place Order</button>
        </div>
    </div>
</div>
@endif
