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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews =Review::paginate(5);
        return view('admin.Pages.review.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products =Product::get();
        $users=User::get();
        return view('admin.Pages.review.create',compact('products','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviewRequest $request)
    {
        Review::create($request->all());
        Alert::success('Success Title', 'Review Was Created');
        return redirect(route('admin.review.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        $products =Product::get();
        $users=User::get();
        return view('admin.Pages.review.edit',compact('products','users','review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReviewRequest  $request
     * @param  \App\Models\Review $review
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReviewRequest $request,Review $review)
    {
        $review->update($request->validated());
        Alert::success('Success Title', 'Review Was Updated');
        return redirect(route('admin.review.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();
        Alert::success('Success Title', 'Review Was Deleted');
        return redirect(route('admin.review.index'));

    }
}
