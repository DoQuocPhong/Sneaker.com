<?php

namespace App\Http\Controllers\client;

use App\Bill;
use App\Billdetail;
use App\Customer;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Http\Controllers\Controller;
use App\Typeproduct;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;
use Session;
use App\Cart;

class ComplexController extends Controller
{

    public function AddCart(Request $request, $id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        if ($product != null) {
            $oldcart = Session('Cart') ? Session('Cart') : null;
            $newcart = new Cart($oldcart);
            $newcart->AddCart($product, $id);

            $request->Session()->put('Cart', $newcart);
        }
        return view('client.shopping_cart.cart');
    }

    public function AddHeart(Request $request, $id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        if ($product != null) {
            $oldcart = Session('Heart') ? Session('Heart') : null;
            $newcart = new Cart($oldcart);
            $newcart->AddCart($product, $id);

            $request->Session()->put('Heart', $newcart);
        }
        return view('client.shopping_cart.heart');
    }

    public function DeleteItemCart(Request $request, $id)
    {
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newcart = new Cart($oldcart);
        $newcart->DeleteItemCart($id);

        if (Count($newcart->products) > 0) {
            $request->Session()->put('Cart', $newcart);
        } else {
            $request->Session()->forget('Cart');
        }

        return view('client.shopping_cart.cart');
    }

    public function DeleteItemHeart(Request $request, $id)
    {
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newcart = new Cart($oldcart);
        $newcart->DeleteItemCart($id);

        if (Count($newcart->products) > 0) {
            $request->Session()->put('Heart', $newcart);
        } else {
            $request->Session()->forget('Heart');
        }

        return view('client.shopping_cart.heart');
    }

    public function DeleteListItemCart(Request $request, $id)
    {
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newcart = new Cart($oldcart);
        $newcart->DeleteItemCart($id);

        if (Count($newcart->products) > 0) {
            $request->Session()->put('Cart', $newcart);
        } else {
            $request->Session()->forget('Cart');
        }

        return view('client.shopping_cart.list-cart');
    }

    public function SaveListItemCart(Request $request, $id, $quanty)
    {
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newcart = new Cart($oldcart);
        $newcart->UpdateItemCart($id, $quanty);

        $request->Session()->put('Cart', $newcart);

        return view('client.shopping_cart.list-cart');
    }

    public function SaveAllListItemCart(Request $request)
    {
        foreach ($request->data as $item) {
            $oldcart = Session('Cart') ? Session('Cart') : null;
            $newcart = new Cart($oldcart);
            $newcart->UpdateItemCart($item['key'], $item['value']);
            $request->Session()->put('Cart', $newcart);
        }
    }

    public function create()
    {
        return view('client.check-out.index');
    }

    public function store(Request $request)
    {
        $cart=Session::get('Cart');

        $customer= new Customer;
        $customer->name=$request->name;
        $customer->gender=$request->gender;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->phone_number=$request->phone;
        $customer->note=$request->note;

        $customer->save();

        $bill=new Bill;
        $bill->id_customer=$customer->id;
        $bill->date_order=date('Y-m-d');
        $bill->total=$cart->totalPrice;
        $bill->note=$request->notee;
        $bill->save();

        foreach($cart->products as $key => $value){
            $bill_detail=new Billdetail;
            $bill_detail->id_bill=$bill->id;
            $bill_detail->id_product=$key;
            $bill_detail->quantity=$value['quanty'];
            $bill_detail->unit_price=$value['price']/$value['quanty'];
            $bill_detail->save();
        }

        Session::forget('Cart');
        return redirect()->back()->with('thongbao','Đặt hàng thành công');

    }

    public function index($id)
    {
        $product = Product::find($id);
        $type_product = Typeproduct::all();
        $type_productt = Typeproduct::find($product->id_type_product);

        $productt = Product::where('id_type_product', $product->id_type_product)->paginate(6);

        $images = Image::all();
        return view('client.product.index', ['product' => $product, 'type_productt' => $type_productt,
            'images' => $images, 'type_product' => $type_product, 'productt'=>$productt]);
    }
}
