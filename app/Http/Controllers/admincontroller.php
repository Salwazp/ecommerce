<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function tabAdmin()
    {
        return view('admin.table');
    }

    public function chartAdm()
    {
        return view('admin.chart');
    }
}
