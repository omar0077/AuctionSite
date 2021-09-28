<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Post;
use App\Bid;
use App\User;

class RegisteredUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'registered:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send mail send mail send mail';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        date_default_timezone_set("Asia/Karachi");
        $t = date("Y-m-d H:i:s", time());

        $ads = Post::where('IsAuctionEnd', 0)
            ->where('ad_category', 'auction')
            ->get();
        foreach ($ads as $ad) {
            if ($t >= $ad->bid_close_date) {
                $bid = Bid::where('post_id', $ad->id)->orderBy('bid_value', 'desc')->first();
                $post = Post::find($ad->id);
                $post->IsAuctionEnd = 1;
                $post->save();

                if ($bid) {
                    $winner = User::find($bid->user_id);
                    $to_name = '';
                    $to_email = $ad->user_email;
                    $data = array(
                        'name' => $ad->user_name,
                        'title' => $ad->title,
                        'value' => $bid->bid_value,
                        'winner' => $winner->name,
                        "link" => "http://localhost/multiauth/public/detailed/" . $ad->id
                    );

                    Mail::send('mail2', $data, function ($message) use ($to_name, $to_email) {
                        $message->to($to_email, $to_name)
                            ->subject('test');
                    });

                    $to_name = '';
                    $to_email = $winner->email;
                    $data = array(
                        'name' => $winner->name,
                        'title' => $ad->title,
                        "link" => "http://localhost/multiauth/public/detailed/" .
                            $ad->id,
                        "link2" => "http://localhost/multiauth/public/stripe/" . $ad->id . "/" . $winner->id . "/" . $ad->user_id
                    );

                    Mail::send('mail3', $data, function ($message) use ($to_name, $to_email) {
                        $message->to($to_email, $to_name)
                            ->subject('test');
                    });
                }
            } else {

            }
        }
    }
}
