<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class ReviewController extends Controller
{
    public function create(StoreReviewRequest $request)
    {
        $res = Http::get('http://127.0.0.1:5005/get_rate', [
            'word' => $request->review
        ]);

        $result = $res->body();
        $result = str_replace("\n", "", $result);
        $result = str_replace('"', "", $result);
        if ($result == "positive") {
            Review::create([
                'user_id' => $request->user_id,
                'product_id' => $request->product_id,
                'review' => $request->review,
                'rate' => true,
            ]);
        } else if ($result == "negative") {
            Review::create([
                'user_id' => $request->user_id,
                'product_id' => $request->product_id,
                'review' => $request->review,
                'rate' => false,
            ]);
        } else {
            Alert::error('Error Title', 'There was an error');
            return redirect()->back();
        }

        Alert::success('Success Title', 'Review Was Created');
        return redirect()->back();
    }
}
