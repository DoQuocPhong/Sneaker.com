<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Admin

Route::get('admin/login','admin\UserController@getLoginAdmin');
Route::post('admin/login','admin\UserController@postLoginAdmin');
Route::get('admin/logout','admin\UserController@getLogoutAdmin');

Route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function (){
    //customer
    Route::group(['prefix'=>'customer'],function (){
        Route::get('display','admin\CustomerController@index');

        Route::get('add','admin\CustomerController@create');
        Route::post('add','admin\customerController@store');

        Route::get('update/{id}','admin\CustomerController@edit');
        Route::post('update/{id}','admin\CustomerController@update');
    }) ;

    //user
    Route::group(['prefix'=>'user'],function (){
        Route::get('display','admin\UserController@index');

        Route::get('add','admin\UserController@create');
        Route::post('add','admin\UserController@store');

        Route::get('update/{id}','admin\UserController@edit');
        Route::post('update/{id}','admin\UserController@update');

        Route::get('delete/{id}','admin\UserController@destroy');

        Route::get('search','admin\UserController@search');
    });

    //bill
    Route::group(['prefix'=>'bill'],function (){
        Route::get('display','admin\BillController@index');

    });

    //products
    Route::group(['prefix'=>'product'],function (){
        Route::get('display','admin\ProductController@index')->name('product.display');

        Route::get('add','admin\ProductController@create');
        Route::post('add','admin\ProductController@store');

        Route::get('update/{id}','admin\ProductController@edit');
        Route::post('update/{id}','admin\ProductController@update');

        Route::get('delete/{id}','admin\ProductController@destroy');

        Route::get('search','admin\ProductController@search');
    });

    //image_products
    Route::group(['prefix'=>'image_product'],function (){
        Route::get('display','admin\ImageController@index');

        Route::get('add','admin\ImageController@create');
        Route::post('add','admin\imageController@store');

        Route::get('update/{id}','admin\ImageController@edit');
        Route::post('update/{id}','admin\ImageController@update');

        Route::get('delete/{id}','admin\ImageController@destroy');
    });

    //type_products
    Route::group(['prefix'=>'type_product'],function (){
        Route::get('display','admin\TypeproductController@index') ;

        Route::get('add','admin\TypeproductController@create');
        Route::post('add','admin\TypeproductController@store');

        Route::get('update/{id}','admin\TypeproductController@edit');
        Route::post('update/{id}','admin\TypeproductController@update');

        Route::get('delete/{id}','admin\TypeproductController@destroy');

        Route::get('search','admin\TypeproductController@search');
    });

    //news
    Route::group(['prefix'=>'new'],function (){
        Route::get('display','admin\NewController@index');

        Route::get('add','admin\NewController@create');
        Route::post('add','admin\newController@store');

        Route::get('update/{id}','admin\NewController@edit');
        Route::post('update/{id}','admin\NewController@update');

        Route::get('delete/{id}','admin\NewController@destroy');

        Route::get('search','admin\NewController@search');
    });

    //image_news
    Route::group(['prefix'=>'image_new'],function (){
        Route::get('display','admin\ImagenewController@index');

        Route::get('add','admin\ImagenewController@create');
        Route::post('add','admin\imagenewController@store');

        Route::get('update/{id}','admin\ImagenewController@edit');
        Route::post('update/{id}','admin\ImagenewController@update');

        Route::get('delete/{id}','admin\ImagenewController@destroy');

        Route::get('search','admin\ImagenewController@search');
    });

    //slide
    Route::group(['prefix'=>'slide'],function (){
        Route::get('display','admin\SlideController@index');

        Route::get('add','admin\SlideController@create');
        Route::post('add','admin\SlideController@store');

        Route::get('update/{id}','admin\SlideController@edit');
        Route::post('update/{id}','admin\SlideController@update');

        Route::get('delete/{id}','admin\SlideController@destroy');

        Route::get('search','admin\SlideController@search');
    });

    //dasboard
    Route::get('dasboard',function (){
        return view('admin.dasboard.dasboard') ;
    });

});

//Route::get('login','client\LoginController@getLoginClient');
Route::post('login','client\LoginController@postLoginClient');
Route::get('logout','client\LoginController@getLogoutClient');
//Client

Route::group(['prefix'=>'/'],function (){

    Route::get('/','client\HomeController@index');

    Route::get('shop','client\ProductController@index');

    Route::get('shopping-cart',function (){
        return view('client.shopping_cart.index');
    });

    Route::get('check-out','client\ComplexController@create');
    Route::post('check-out','client\ComplexController@store');

    //Register
    Route::get('register','client\RegisterController@create');
    Route::post('register','client\RegisterController@store');

    //blog
    Route::get('blog','client\BlogController@index');

    //blog_detail
    Route::get('blog-detail',function (){
        return view('client.blog.blog-details');
    });
    Route::get('blog-detail/{id}','client\BlogdetailController@index');

    //contact
    Route::get('contact',function (){
        return view('client.contact.index');
    });

    //faqs
    Route::get('faqs',function (){
        return view('client.faqs.index');
    });

    //product-details
    Route::get('product/{id}','client\complexController@index');

    Route::get('search','client\HomeController@getsearch');
});

Route::get('AddCart/{id}','client\ComplexController@AddCart');
Route::get('AddHeart/{id}','client\ComplexController@AddHeart');

Route::get('Delete-Item-Cart/{id}','client\ComplexController@DeleteItemCart');

Route::get('Delete-Item-List-Cart/{id}','client\ComplexController@DeleteListItemCart');

Route::get('Save-Item-List-Cart/{id}/{quanty}','client\ComplexController@SaveListItemCart');

Route::post('Save-All','client\ComplexController@SaveAllListItemCart');




