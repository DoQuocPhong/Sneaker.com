@if(Session::has("Cart") != null)
    <div class="overflow-auto" style="width: auto; height: 400px">
        <div class="select-items">
            <table>
                <tbody>
                @foreach(Session::get('Cart')->products as $item)
                    <tr>
                        <td class="si-pic"><img
                                src="<?php echo asset('public/upload/product')?>/{{$item['productInfor']->image}}"
                                alt=""></td>
                        <td class="si-text">
                            <div class="product-selected">
                                @if($item['productInfor']->promotion_price!=0)
                                    <p>{{number_format($item['productInfor']->promotion_price)}}
                                        x {{$item['quanty']}}</p>
                                @else
                                    <p>{{number_format($item['productInfor']->unit_price)}} x {{$item['quanty']}}</p>
                                @endif
                                <h6>{{$item['productInfor']->name}}</h6>
                            </div>
                        </td>
                        <td class="si-close">
                            <i class="ti-close" data-id="{{$item['productInfor']->id}}"></i>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="select-total">
        <span>total:</span>
        <h5>{{number_format(Session::get('Cart')->totalPrice)}}đ</h5>
        <input hidden id="total-quanty-cart" type="number" value="{{Session::get('Cart')->totalQty}}">
    </div>
@endif
