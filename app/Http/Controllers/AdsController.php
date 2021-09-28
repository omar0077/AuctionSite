<?php

namespace App\Http\Controllers;

use App\Ionic_test;
use Illuminate\Http\Request;
use App\Post;
use App\Pic;
use App\Bid;

class AdsController extends Controller
{
    public function detailedAd($id)
    {
        $data = array();

        $data['ad'] = Post::find($id);
        $data['pics'] = Pic::where('post_id', $id)->get();
        $data['bidCount'] = Bid::count();
        $data['max_bid_value'] = Bid::max('bid_value');

        return view('ad_detailed')->with('data', $data);
    }

    public function adsByCategory($category)
    {
        $ads = Post::where('category', $category)
            ->where('postIsDeleted', 0)
            ->where('postIsApproved', 1)
            ->where('IsAuctionEnd', 0)
            ->get();

        return view('ads')->with('ads', $ads)->with('category', $category);
    }

    public function test()
    {
        return json_encode(Ionic_test::all());
    }

}
