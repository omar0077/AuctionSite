<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Bid;

class BidsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function purchase(Request $request)
    {
        return view('stripe');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'bid_value' => 'required',
        ]);

        $max = Post::find($request->input('post_id'));
        if ($request->input('bid_value') >= $max->bid_start_price) {
            $bid = new Bid;
            $bid->bid_value = $request->input('bid_value');
            $bid->user_id = $request->input('user_id');
            $bid->post_id = $request->input('post_id');
            $bid->save();

            return redirect('detailed/' . $bid->post_id)->with('success1', 'Your bid is added');
        } else {
            return redirect('detailed/' . $request->input('post_id'))->with('failed', 'You Bid Must Be Greater Than Original Value');
        }

    }


}
