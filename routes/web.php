<?php

use App\Post;

Route::get('/', function () {
    $total = Post::where('postIsDeleted', 0)
        ->where('postIsApproved', 1)
        ->where('IsAuctionEnd', 0)
        ->orderBy('id', 'desc')
        ->get();

    return view('welcome')->with('total', $total);
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('ads/{category}', 'AdsController@adsByCategory');
Route::get('detailed/{id}', 'AdsController@detailedAd');
Route::get('detailed/{id}', 'AdsController@detailedAd');
Route::get('search', 'SearchController@searchProduct');
Route::resource('posts', 'PostController');
Route::resource('bids', 'BidsController');

Route::get('admin', 'AdminController@showDashboard')->middleware('admin');
Route::get('admin/pending_posts', 'AdminController@showPendingPosts')->middleware('admin');
Route::get('admin/approved_posts', 'AdminController@showApprovedPosts')->middleware('admin');
Route::get('admin/total_posts', 'AdminController@showTotalPosts')->middleware('admin');
Route::get('admin/update_post/{id}', 'AdminController@updatePost')->middleware('admin');
Route::get('admin/undo_approved_post/{id}', 'AdminController@undo_approved_post')->middleware('admin');
Route::get('admin/delete_post/{id}', 'AdminController@delete_post')->middleware('admin');
Route::get('admin/undo_deleted_post/{id}', 'AdminController@undo_deleted_post')->middleware('admin');
Route::get('admin/total_users', 'AdminController@show_total_users')->middleware('admin');
Route::get('admin/block_user/{id}', 'AdminController@block_user')->middleware('admin');
Route::get('admin/blocked_users', 'AdminController@show_blocked_user')->middleware('admin');
Route::get('admin/unblock_user/{id}', 'AdminController@unblock_user')->middleware('admin');

Auth::routes(['verify' => true]);

Route::get('stripe/{id1}/{id2}/{id3}', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

Route::get('profile/{id}', 'ProfileController@showProfile');
Route::get('edit_profile/{id}', 'ProfileController@showEditProfile');
Route::get('report/{id}', 'ProfileController@report');
Route::get('submit_report_to_admin', 'ProfileController@submit_report');

Route::post('direct_purchase', 'BidsController@purchase');


