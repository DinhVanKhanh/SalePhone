<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chitietloaisp;
use App\chitietsp;
class layout extends Controller
{
    function getTitle()
    {
    	//$query = chitietloaisp::all();
    	return view('layout/telephone/trangchu');
    }

    function getLinkTitle($tensp)
    {
    	//$query = chitietloaisp::all();
    	$chitietsp = chitietsp::where('tenloai',$tensp)->get();
    	// return view('')
    	// dd($chitietsp);
    	return view('layout/telephone/Iphone',compact('chitietsp'));
    }

    function getProduct(Request $request)
    {	$id = $request->id;
    	// $query = chitietsp::where('id',$id)->skip(0)->take(5)->get();
        $query = chitietsp::getID($id); 
        // dd($query);
    	foreach ($query as $value) {
    		$tenloai= $value->tenloai;
    	}
    	$all = chitietsp::where('tenloai',$tenloai)->take(3)->get();
    	return view('layout/productsdetail/product',compact('query','all'));
    }


    function GetSearch(Request $rq)
    {
    	$tensp = $rq->txtSearch;
    	$chitietsp = chitietsp::where('mota','like','%'.$tensp.'%')->get();
    	return view('layout/telephone/Iphone',compact('chitietsp'));
    }

}
