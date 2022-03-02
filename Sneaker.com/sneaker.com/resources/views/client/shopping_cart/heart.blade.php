@if(Session::has("Heart") != null)
    <div class="overflow-auto" style="width: auto; height: 400px">
        <div class="select-items">
            <table>
                <tbody>
                @foreach(Session::get('Heart')->products as $item)
                    <tr>
                        <td class="si-pic"><img
                                src="<?php echo asset('public/upload/product')?>/{{$item['productInfor']->image}}"
                                alt="" style="width: 190px"></td>
                        <td class="si-text">
                            <div class="product-selected">
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
@endif
