<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\shoppingcart;
use App\chitietsp;
use App\quanlykhachhang;
class ControllerCart extends Controller
{
    function getCart($id='')
    {	
    	// $cart = session('cart');
    	// if(isset($cart[$id]))
    	// 	$cart[$id] += 1;
    	// else
    	// 	$cart[$id] = 1;
    	// session(['cart'=>$cart]);
    	// session()->put('cart',1);
    	// $qty = session()->get('cart') + 1;
    	// session()->put('cart',$qty);
    	// // dd(session('cart'));
    	// $query = chitietsp::where('id',$id)->get();
    	// return view('layout/module/cart',compact('query'));

    	$product = chitietsp::find($id);
    	// dd($product);
    	if(!empty($id)){
    		Cart::add(['id'=>$product->id,'name'=>$product->tenloai,'price'=>$product->gia,'quantity'=>1,'attributes'=>['mota'=>$product->mota,'hinhanh'=>$product->hinhanh]]);
    		return redirect('layout/module/giohang');
    	}
    	// dd(Cart::getContent());
    	// Cart::clear();
    	return view('layout/module/cart');
    }

    function DeleteCart($id='')
    {	
    	$id_move = chitietsp::find($id);
    	// dd($id_move);
    	Cart::remove($id_move->id);
    	return redirect('layout/module/giohang');
        
    }


    function getData(Request $rq)
    {
    	Cart::Update($rq->id,['quantity'=>['relative' => false,
      'value' => $rq->num]]);
    	echo $rq->id;
    	// $arr = ['id'=>$rq->id,'qty'=>$rq->num];
    	// echo json_encode($arr);
    	 // return redirect('layout/module/giohang');
    }
    function getCheckout()
    {
    	return view('layout/module/checkout');
    }

    function Submit_Checkout(Request $rq)
    {
    	// $a = $rq->fullname;
    	
    	
    	// dd(Cart::getContent()->count());
    	foreach(Cart::getContent() as $key => $value){
    			$qlkh = new quanlykhachhang();
    			$qlkh->tensp = $value['attributes']['mota'];
		    	$qlkh->soluong = $value['quantity'];
		    	$qlkh->gia = $value['price'];
		    	$qlkh->tongtien = $value['price'] * $value['quantity'];
	    		$qlkh->ten = $rq->fullname;
		    	$qlkh->diachi = $rq->address;
		    	$qlkh->email = $rq->email;
		    	$qlkh->sdt = $rq->phone;
		    	$qlkh->tinhtrang = "Chưa xử lý";	
		    	$qlkh->save();
    	}
    	Cart::clear();
    	return redirect('index');
    }

}
