<?php

namespace App\Http\Controllers\admin;

use App\Billdetail;
use App\Customer;
use App\Product;
use App\Http\Controllers\Controller;
use App\Bill;

class BillController extends Controller
{
    //
    public function index()
    {
        $bill = Bill::all();
        $customer=Customer::all();
        $bill_detail=Billdetail::all();
        $product=Product::all();

        return view('admin.bills.display', ['bill' => $bill,'customer'=>$customer,'bill_detail'=>$bill_detail,'product'=>$product]);
    }
}
