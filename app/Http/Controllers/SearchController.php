<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SearchController extends Controller
{
    public function searchProduct(Request $request)
    {
        $ads = Post::Where('title', 'like', '%' . $request->input('search1') . '%')
            ->Where('category', 'like', '%' . $request->input('search2') . '%')
            ->Where('brand', 'like', '%' . $request->input('search3') . '%')
            ->where('postIsDeleted', 0)
            ->where('postIsApproved', 1)
            ->get();

        return view('ads')->with('ads', $ads);
    }
}
