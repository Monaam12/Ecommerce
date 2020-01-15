<?php

namespace App\Http\Controllers\Site;

use App\Model\Brand;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('layouts.home');
    }

    public function sidebar()
    {
        $brands = Brand::all();

        return view('layouts.category.sidebar', compact('brands'));
    }
}
