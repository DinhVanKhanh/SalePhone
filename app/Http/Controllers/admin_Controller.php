<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chitietloaisp;
class admin_Controller extends Controller
{
    function getShow_Category()
    {
    	$chitietloaisp = chitietloaisp::all();
    	// dd($chitietloaisp);
    	return view('admin/loaisp/hienthiloaisanpham',['chitietloaisp'=>$chitietloaisp]);
    }
    function getAdd_Category()
    {
    	return view('admin/loaisp/themloaisanpham');
    }

    function remove_Category($id= '')
    {
    	$loaisp = chitietloaisp::find($id);
    	//$loaisp->delete();
    	return redirect('admin_1/loaisp/hien-thi-loai-san-pham'); // redirect là url
    }

    function Edit_Category($id='')
    {
    	
    }

    function getShow_prod()
    {
    	return view('admin/sanpham/hienthisanpham');
    }

    function getAdd_prod()
    {
    	return view('admin/sanpham/themsanpham');
    }
}
