<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductPicture;

class admincontroller extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function tabAdmin()
    {
        $getProduct = Product::select('products.product_id','product_pictures.product_picture_id','product_pictures.directory as picture','products.shop_id','products.name','products.category_code as category')
                        ->leftJoin('product_pictures', 'product_pictures.product_id', '=', 'products.product_id')
                        ->get();
        // dd($getProduct);die;
        return view('admin.table',['Product' => $getProduct]);
    }

    public function chartAdm()
    {
        return view('admin.chart');
    }
}
