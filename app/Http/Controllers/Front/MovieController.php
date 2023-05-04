<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Product::IsApproved()->get();
        return view('front.pages.movies.index',compact('movies'));
    }

    public function show(Product $product)
    {
        $reviews = $product->reviews;
        $sum = 0;
        foreach ($reviews as $review)
        {
            $sum += $review->rate;
        }
        $avg = $sum / $reviews->count();
        $avg = $avg * 5;
        $avg = round($avg,2);
        return view('front.pages.movies.show',compact('product','avg'));
    }


}
