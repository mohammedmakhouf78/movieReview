<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categoryCount = Category::count();
        $productCount = Product::count();
        $userCount = User::count();
        $reviewCount = Review::count();
        return view('admin.Home',compact('categoryCount','productCount','userCount','reviewCount'));
    }
}
