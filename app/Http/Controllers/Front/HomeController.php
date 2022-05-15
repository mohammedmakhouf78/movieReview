<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $first = Product::limit(3)->get();
        $second = Product::skip(3)->take(2)->get();
        $third = Product::skip(5)->take(4)->get();
        $reviews = Review::limit(3)->get();
        return view('front.index',compact('first','second','third','reviews'));
    }
}
