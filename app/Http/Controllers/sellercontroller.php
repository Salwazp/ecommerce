<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sellercontroller extends Controller
{
    public function dash()
    {
        return view('seller.dashboard');
    }
    public function profile()
    {
        return view('seller.profile');
    }
    public function toko()
    {
        return view('seller.toko');
    }
    public function review()
    {
        return view('seller.review');
    }
    public function resgiterform()
    {
       
        return view('seller.register', );
    }

    
    

}
