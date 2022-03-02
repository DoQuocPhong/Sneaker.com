<!--modal-->
<div class="modal fade" id="exampleModal{{$bills->id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div><h3>BILL DETAIL</h3></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="background-color: cadetblue;">
                <div class="container mt-5">
                    <div class="d-flex justify-content-center row">
                        <div class="col-md-8">
                            <div class="p-3 bg-white rounded">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="text-uppercase">Bill detail</h1>
                                        <div class="billed"><span class="font-weight-bold text-uppercase">Customer:</span>
                                                @foreach($customer as $cus)
                                                    @if($cus->id==$bills->id_customer)
                                                        <span class="ml-1">
                                                            {{$cus->name}}
                                                        </span>
                                                    @endif
                                                @endforeach
                                        </div>
                                        <div class="billed"><span class="font-weight-bold text-uppercase">Date:</span><span class="ml-1">{{date('j F, Y',strtotime($bills->created_at))}}</span></div>
                                        <div class="billed"><span class="font-weight-bold text-uppercase">Order ID:</span><span class="ml-1">{{$bills->id}}</span></div>
                                        <br>
                                    </div>

                                </div>
                                <div class="mt-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Unit_price</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($bill_detail as $bd)
                                                    @foreach($product as $proc)
                                                            @if($bd->id_product==$proc->id && $bills->id==$bd->id_bill)
                                                                <tr>
                                                                    <td>
                                                                        <div class="row">
                                                                        <div class="col-4">
                                                                            <img
                                                                                src="<?php echo asset('public/upload/product')?>/{{$proc->image}}"
                                                                                alt="" style="width: 100px">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            {{$proc->name}}
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="text-align: center">{{$bd->quantity}}</td>
                                                                    <td>{{$bd->unit_price}}</td>
                                                                    <td>{{$bd->quantity*$bd->unit_price}}</td>
                                                                </tr>
                                                            @endif
                                                    @endforeach
                                            @endforeach
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Total</td>
                                                <td>{{$bills->total}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger btn-sm mr-5" type="button" style="margin-top: 20px">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end modal-->



