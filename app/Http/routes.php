<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    // $product = \App\Models\Product::find(2);
    // return $product->orders;

	// $type = \App\Models\Type::find(2);
	// return $type->products; 

	// $users = \App\Models\User::find(1);
	// return $users->orders; 

	// $order = \App\Models\Order::find(1);
	// return $order->products;


//-----------create type---------------
    // $type = new \App\Models\Type();
    // $type->name = "Shark";
    // $type->save();

    // return $type;

//==================another way to create============

	//=======method assignment=====
	// $user = \App\Models\User::create([
	// 	"username"=>"JoeJai",
	// 	"firstname"=>"Joe",
	// 	"lastname"=>"Jai",
	// 	"email"=>"joe.jai@gmail.com",
	// 	"password"=>"bla"
	// 	]);

	// return $user;



    return view('welcome');
});

Route::get('about', function () {

    return view('about');
});


Route::get('contact', function () {

    return view('contact');
});

Route::get('types/{id}', function ($id) {

	$type = \App\Models\Type::find($id);

    return view('types',['type'=>$type]);
    // compact("type") ==
});

Route::get('products/create', function () {

    return view('createProduct');
});















