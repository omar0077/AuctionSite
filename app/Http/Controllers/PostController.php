<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Pic;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        //
    }


    public function create()
    {
        $user = User::find(Auth::id());
        return view('post_ad')->with('user', $user);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ad_category' => 'required',
        ]);

        if ($request->input('ad_category') === "auction") {
            $validatedData = $request->validate([
                'title' => 'required',
                'categoty' => 'required',
                'brand' => 'required',
                'condition' => 'required',
                'bid_start_price' => 'required',
                'bid_close_date' => 'required',
                'description' => 'required',
            ]);
        } elseif ($request->input('ad_category') === "absolute") {
            $validatedData = $request->validate([
                'title' => 'required',
                'categoty' => 'required',
                'brand' => 'required',
                'condition' => 'required',
                'absolute_value' => 'required',
                'description' => 'required',
            ]);
        }


        $post = new Post;
        $post->ad_category = $request->input('ad_category');
        $post->title = $request->input('title');
        $post->category = $request->input('categoty');
        $post->brand = $request->input('brand');
        $post->condition = $request->input('condition');
        $post->absolute_value = $request->input('absolute_value');
        $post->bid_start_price = $request->input('bid_start_price');
        $post->bid_close_date = $request->input('bid_close_date');
        $post->description = $request->input('description');
        $post->map_url = $request->input('map_url');
        $post->user_email = $request->input('userEmail');
        $post->user_number = $request->input('userPhone');
        $post->user_id = $request->input('userId');
        $post->user_name = $request->input('userName');
        $post->postIsDeleted = 0;
        $post->postIsApproved = 0;
        $post->IsAuctionEnd = 0;
        if ($request->file('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path() . '/postImages/', $name);
            $data = $name;
            $post->image = $data;
        }
        $post->save();

        if ($request->file('filename')) {
            foreach ($request->file('filename') as $key => $value) {
                $pic = new Pic;
                $name = $value->getClientOriginalName();
                $value->move(public_path() . '/postImages/', $name);
                $data = $name;
                $pic->filename = $data;
                $pic->post_id = $post->id;
                $pic->save();
            }
        }

        return redirect('/')->with('success', 'Your add will be posted after approval');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
