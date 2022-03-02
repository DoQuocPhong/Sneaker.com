<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $customer = Customer::all();
        return view('admin.customer.display', ['customer' => $customer]);
    }

    public function create()
    {
        return view('admin.customer.add');
    }

    public function store(){

    }

    public  function edit(){
    }

    public  function update(){

    }

    public function destroy(){

    }

}
