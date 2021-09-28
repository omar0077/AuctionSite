<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    public function showProfile($id)
    {
        $data = array();

        $data['pendingAds'] = Post::where('user_id', $id)
            ->where('postIsApproved', 0)
            ->where('postIsDeleted', 0)
            ->get();
        $data['approvedCount'] = Post::where('user_id', $id)
            ->where('postIsApproved', 1)
            ->where('postIsDeleted', 0)
            ->where('IsAuctionEnd', 0)
            ->get();
        $data['total_posts'] = Post::where('user_id', $id);

        $data['user'] = User::find($id);
        return view('profile')->with('data', $data);
    }

    public function showEditProfile($id)
    {
        return $id;
    }

    public function report($id)
    {
        $data = array();
        $data['user'] = User::where('id', Auth::user()->id)->first();
        $data['reported_user'] = User::where('id', $id)->first();

        return view('feedback')->with('data', $data);
    }

    public function submit_report(Request $request)
    {
        $to_name = '';
        $to_email = "omarsaleem0077@gmail.com";
        $data = array(
            'user_email' => $request->input('user_email'),
            'reported_user_email' => $request->input('reported_user_email'),
            'report_msg' => $request->input('report_msg')
        );

        Mail::send('mail4', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('test');
        });

        return redirect('');
    }
}
