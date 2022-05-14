<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReviewController extends Controller
{
    public function create(StoreReviewRequest $request)
    {
        Review::create($request->all());
        Alert::success('Success Title', 'Review Was Created');
        return redirect()->back();
    }
}
