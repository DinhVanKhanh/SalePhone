<?php

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


Route::get('/',function(){
	return redirect('index');
});
Route::get('index','layout@getTitle')->name('trangchu');

Route::group(['prefix'=>'layout'],function(){
	Route::group(['prefix'=>'module'],function(){
		Route::post('timkiem','layout@GetSearch');

		Route::get('giohang/{id?}','ControllerCart@getCart');
		Route::get('xoa/{id?}','ControllerCart@DeleteCart');
		Route::post('getdata','ControllerCart@getData');

		Route::post('checkout','ControllerCart@getCheckout');
	});
	Route::group(['prefix'=>'telephone'],function(){
		Route::get('trangchu','layout@getTitle');
		Route::get('{tensp}','layout@getLinkTitle');
	});

	Route::group(['prefix'=>'productsdetail'],function(){
		Route::get('{id}','layout@getProduct');
	});
});

Route::post('Submit_Checkout','ControllerCart@Submit_Checkout');

//layout admin

Route::get('layoutadmin',function(){
		return view('admin/index');
	});

Route::group(['prefix'=>'admin_1'],function(){
	Route::group(['prefix'=>'loaisp'],function(){
		Route::get('hien-thi-loai-san-pham','admin_Controller@getShow_Category');
		Route::get('them-loai-san-pham','admin_Controller@getAdd_Category');
		Route::get('xoa-loai-san-pham/{id?}','admin_Controller@remove_Category');
		Route::get('sua-loai-san-pham/{id?}','admin_Controller@Edit_Category');
	});
	Route::group(['prefix'=>'sanpham'],function(){
		Route::get('hien-thi-san-pham','admin_Controller@getShow_prod');
		Route::get('them-san-pham','admin_Controller@getAdd_prod');
	});

	Route::group(['prefix'=>'productsdetail'],function(){
		Route::get('{id}','layout@getProduct');
	});
});