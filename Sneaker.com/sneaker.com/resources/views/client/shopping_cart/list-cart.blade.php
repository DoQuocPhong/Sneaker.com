<div class="cart-table">
    <table>
        <thead>
        <tr>
            <th>Image</th>
            <th class="p-name">Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Save</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @if(Session::has("Cart") != null)
            @foreach(Session::get('Cart')->products as $item)
                <tr>
                    <td class="cart-pic first-row"><img src="<?php echo asset('public/upload/product')?>/{{$item['productInfor']->image}}" alt="" style="width: 180px; height: auto"></td>
                    <td class="cart-title first-row">
                        <h5>{{$item['productInfor']->name}}</h5>
                    </td>
                    @if($item['productInfor']->promotion_price!=0)
                        <td class="p-price first-row">{{number_format($item['productInfor']->promotion_price)}}đ</td>
                    @else
                        <td class="p-price first-row">{{number_format($item['productInfor']->unit_price)}}đ</td>
                    @endif
                    <td class="qua-col first-row">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" data-id ="{{$item['productInfor']->id}}" id="quanty-item-{{$item['productInfor']->id}}" value="{{$item['quanty']}}">
                            </div>
                        </div>
                    </td>
                    <td class="total-price first-row">{{number_format($item['price'])}}đ</td>
                    <td class="close-td first-row"><i class="ti-save" onclick="SaveListItemCart({{$item['productInfor']->id}});" id="save-cart-item-{{$item['productInfor']->id}}"></i></td>
                    <td class="close-td first-row"><i class="ti-close" onclick="DeleteListItemCart({{$item['productInfor']->id}});"></i></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="cart-buttons">
            <a href="<?php echo url('')?>" class="primary-btn continue-shop">Continue shopping</a>
            <a href="#" class="primary-btn up-cart edit-all" >Update cart</a>
        </div>
        <div class="discount-coupon">
            <h6>Discount Codes</h6>
            <form action="#" class="coupon-form">
                <input type="text" placeholder="Enter your codes">
                <button type="submit" class="site-btn coupon-btn">Apply</button>
            </form>
        </div>
    </div>
    <div class="col-lg-4 offset-lg-4">
        <div class="proceed-checkout">
            @if(Session::has("Cart") != null)
            <ul>
                <li class="subtotal">Quantity <span>{{number_format(Session::get('Cart')->totalQty)}}</span></li>
                <li class="cart-total">TotalPrice <span>{{number_format(Session::get('Cart')->totalPrice)}}đ</span></li>
            </ul>
            <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
            @endif
        </div>
    </div>
</div>
