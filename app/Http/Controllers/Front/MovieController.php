<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Product::where('is_approved',true)->get();
        return view('front.pages.movies.index',compact('movies'));
    }

    public function show(Product $product)
    {
        return view('front.pages.movies.show',compact('product'));
    }

    
}
