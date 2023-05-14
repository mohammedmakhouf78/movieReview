<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\User;
use App\Models\Review;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::paginate(5);
        return view('admin.Pages.review.index', compact('reviews'));
    }

    public function create()
    {
        $products = Product::get();
        $users = User::get();
        return view('admin.Pages.review.create', compact('products', 'users'));
    }

    public function store(StoreReviewRequest $request)
    {
        Review::create($request->all());
        Alert::success('Success Title', 'Review Was Created');
        return redirect(route('admin.review.index'));
    }

    public function edit(Review $review)
    {
        $products = Product::get();
        $users = User::get();
        return view('admin.Pages.review.edit', compact('products', 'users', 'review'));
    }

    public function update(UpdateReviewRequest $request, Review $review)
    {
        $review->update($request->validated());
        Alert::success('Success Title', 'Review Was Updated');
        return redirect(route('admin.review.index'));
    }

    public function destroy(Review $review)
    {
        $review->delete();
        Alert::success('Success Title', 'Review Was Deleted');
        return redirect(route('admin.review.index'));
    }
}
