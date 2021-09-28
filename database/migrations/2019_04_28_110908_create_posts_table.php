<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_email');
            $table->string('user_number');
            $table->string('user_name');
            $table->integer('user_id');
            $table->string('title');
            $table->string('category');
            $table->string('brand');
            $table->string('condition');
            $table->string('image');
            $table->string('ad_category');
            $table->string('bid_start_price')->nullable();
            $table->string('absolute_value')->nullable();
            $table->dateTime('bid_close_date')->nullable();
            $table->text('description');
            $table->text('map_url');
            $table->tinyInteger('IsAuctionEnd');
            $table->tinyInteger('postIsDeleted');
            $table->tinyInteger('postIsApproved');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
