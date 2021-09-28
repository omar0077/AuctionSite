<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showDashboard()
    {
        $count = array();
        $count['total'] = Post::count();
        $count['approved'] = Post::where('postIsApproved', 1)->count();
        $count['pending'] = Post::where('postIsApproved', 0)->count();
        return view('admin')->with('count', $count);
    }

    public function showPendingPosts()
    {
        $pending_posts = Post::where('postIsApproved', 0)
            ->where('postIsDeleted', 0)
            ->get();
        return view('pending_posts')->with('pending_posts', $pending_posts);
    }

    public function showApprovedPosts()
    {
        $approved_posts = Post::where('postIsApproved', 1)
            ->where('postIsDeleted', 0)
            ->get();
        return view('approved_posts')->with('approved_posts', $approved_posts);
    }

    public function showTotalPosts()
    {
        $total_posts = Post::all();
        return view('total_posts')->with('total_posts', $total_posts);
    }

    public function delete_post($id)
    {
        $post = Post::find($id);
        $post->postIsDeleted = 1;
        $post->save();

        return redirect('admin/total_posts')->with('success', 'ad deleted');
    }

    public function undo_deleted_post($id)
    {
        $post = Post::find($id);
        $post->postIsDeleted = 0;
        $post->save();

        return redirect('admin/total_posts')->with('success', 'Ad recovered');
    }

    public function undo_approved_post($id)
    {
        $post = Post::find($id);
        $post->postIsApproved = 0;
        $post->save();

        return redirect('admin/approved_posts')->with('success', 'Ad Un Approved');
    }

    public function updatePost($id)
    {
        $post = Post::find($id);
        $post->postIsApproved = 1;
        $post->save();

        $to_name = '';
        $to_email = $post->user_email;
        $data = array('name' => $post->user_number, "body" => "Your ad is approved by our site's admin");

        Mail::send('mail', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Ad Aproved');
        });

        return redirect('admin/pending_posts')->with('success', 'Ad Approved');
    }

    public function show_total_users()
    {
        $users = User::whereNotNull('email_verified_at')
            ->whereNull('isAdmin')
            ->get();
        return view('total_users')->with('users', $users);
    }

    public function block_user($id)
    {
        $user = User::find($id);
        $user->isBlocked = 1;
        $user->save();

        return redirect('admin/total_users')->with('success', 'user blocked');
    }

    public function show_blocked_user()
    {
        $users = User::whereNotNull('isBlocked')
            ->get();

        return view('blocked_users')->with('users', $users);
    }

    public function unblock_user($id)
    {
        $user = User::find($id);
        $user->isBlocked = null;
        $user->save();

        return redirect('admin/blocked_users')->with('success', 'user unblocked');
    }
}
