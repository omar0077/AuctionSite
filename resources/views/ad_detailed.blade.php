@extends('layouts.total')
@section('content')
    <div class=" bread-3 page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="header-page">
                        <h1>Ad Detail</h1>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="small-breadcrumb modern-type">
                        <div class=" breadcrumb-link">
                            <ul>
                                <li>
                                    <a href="../../index.html">
                                        Home
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:void(0);" class="active">
                                        Ad Details </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="main-content-area clearfix">
        <section class="section-padding modern-version">
            <!-- Main Container -->
            <div class="modern-version-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-xs-12 col-sm-12">
                            <div class="descs-box">
                                <h1>{{$data['ad']->title}}</h1>

                                <div class="modern-version-block-info">
                                    <div class="pull-left  post-author">
                                        <a href="../../author/adforest/indexdb00.html?type=ads">
                                            <img
                                                    src="http://localhost/multiauth/resources/admin-assets/assets/images/user-image.png"
                                                    alt="Profile Pic">
                                        </a>
                                        By <a
                                                href="{{url('profile/'.$data['ad']->id)}}">{{$data['ad']->user_name}}</a>

                                        <span class="spliator">&#45;</span>

                                        &nbsp;
                                        Posted <a href="javascript:void(0);">{{$data['ad']->created_at}}</a>


                                    </div>


                                </div>


                            </div>
                        </div>
                        <div class="col-md-5 col-xs-12 col-sm-12">
                            <div class="modern-version-block-btnz">
                                <div class="full-width new-price-tag">
                                    <h3>Rs. {{$data['ad']->bid_start_price}}<span class="negotiable-single"> (Auction Start Value)</span>
                                    </h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="container">
                <!-- Row -->
                <div class="row">
                    <!-- Middle Content Area -->
                    <div class="col-md-8 col-xs-12 col-sm-12">

                        <!-- Single Ad -->
                        <div class="singlepost-content">
                            <div class="flexslider single-page-slider">
                                <div class="flex-viewport">
                                    <ul class="slides slide-main gallery">
                                        @foreach($data['pics'] as $pic)
                                            <li class="">
                                                <div>
                                                    <a href="../../wp-content/uploads/2017/02/watch1.jpg"
                                                       data-caption="Russian watch" data-fancybox="group">
                                                        <img alt="Russian watch" style="width: 730px;height: 400px"
                                                             src="http://localhost/multiauth/public/postImages/{{$pic->filename}}">

                                                    </a>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- Listing Slider Thumb -->
                            <div class="flexslider" id="carousels">
                                <div class="flex-viewport">
                                    <ul class="slides slide-thumbnail">
                                        @foreach($data['pics'] as $pic)
                                            <li><img style="height: 84px" alt="Russian watch" draggable="false"
                                                     src="http://localhost/multiauth/public/postImages/{{$pic->filename}}">
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="descs-box" id="description">
                                <div class="short-features">
                                    <!-- Heading Area -->
                                    <div class="heading-panel">
                                        <h3 class="main-title text-left">
                                            Description </h3>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Price</strong> : </span>
                                        Rs. {{$data['ad']->bid_start_price}}<span class="negotiable">(Auction)</span>

                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Condition</strong> :</span> {{$data['ad']->condition}}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Post Date</strong> : </span> {{$data['ad']->created_at}}
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                        <span><strong>Auction Clost Date</strong> : </span> {{$data['ad']->bid_close_date}}
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-xs-12 no-padding">
                                        <span><strong>Owner Contact</strong> : </span>
                                        {{$data['ad']->user_number}}
                                    </div>
                                </div>
                                <hr/>
                                <div class="desc-points">
                                    <h1>{{$data['ad']->description}}</h1>
                                </div>
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe width="892" height="341" id="gmap_canvas"
                                                src="https://maps.google.com/maps?q=university%20of%20chi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                frameborder="0" scrolling="no" marginheight="0"
                                                marginwidth="0"></iframe>
                                        <a href="https://www.crocothemes.net"></a></div>
                                    <style>.mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 341px;
                                            width: 892px;
                                        }

                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 341px;
                                            width: 892px;
                                        }</style>
                                </div>
                                <hr/>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session('success1'))
                                    <div class="alert alert-success"
                                         style="margin-top:10px;background: #d4edda;line-height: 3;border-color: #398c5e;color: #398c5e ">
                                        {{session('success1')}}
                                    </div>
                                @endif
                                @if(session('failed'))
                                    <div class="alert alert-danger"
                                         style="margin-top:10px;line-height: 3; ">
                                        {{session('failed')}}
                                    </div>
                                @endif
                                @if(!(Auth::id() == $data['ad']->user_id))
                                    <div class="list-style-1 margin-top-30">
                                        <div class="panel with-nav-tabs panel-default">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab2default" data-toggle="tab" aria-expanded="false">
                                                            Enter Your Is Submitted </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="panel-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade active in" id="tab2default">
                                                        <div class="chat-form ">
                                                            <form method="post"
                                                                  action="<?php echo action('BidsController@store')?>">
                                                                @csrf
                                                                <input hidden type="text" name="user_id"
                                                                       value="{{Auth::id()}}">
                                                                <input hidden type="text" name="post_id"
                                                                       value="{{$data['ad']->id}}">
                                                                <div class="col-md-10">
                                                                    <input name="bid_value"
                                                                           placeholder="Enter Your Bid"
                                                                           class="form-control"
                                                                           type="number" autocomplete="off">
                                                                </div>
                                                                <div class="col-md-2">
                                                                    @if($data['ad']->IsAuctionEnd == 0)
                                                                        <button class="btn btn-theme" type="submit">Send
                                                                        </button>
                                                                    @elseif($data['ad']->IsAuctionEnd == 1)
                                                                        <button class="btn btn-theme" type="submit"
                                                                                disabled>Send
                                                                        </button>
                                                                    @endif
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-12">
                        <div class="sidebar">
                            <div class="country-locations">
                                @if($data['ad']->absolute_value != null)
                                    <div class="class-name" style="text-align: center">
                                        <form method="post"
                                              action="{{url("direct_purchase")}}">
                                            @csrf
                                            <input type="text" hidden name="owner_id" value="{{$data['ad']->user_id}}">
                                            <input type="text" hidden name="buyer_id"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                            <label>Absolute Price : Rs. {{$data['ad']->absolute_value}}
                                                <button id="abs_btn" class="btn btn-theme"
                                                        @if(\Illuminate\Support\Facades\Auth::user()->id == $data['ad']->user_id)
                                                        disabled
                                                        @endif
                                                        type="submit">Purchase
                                                </button>
                                            </label>
                                        </form>
                                    </div>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                            @if($data['ad']->ad_category == "auction")
                                <div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                                                                  role="tab"
                                                                                  data-toggle="tab">Bidding Status</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content bidding-advanced">
                                        <div role="tabpanel" class="tab-pane active" id="home"><p
                                                    class="text-center bid_close no-display"><i class="fa fa-lock"></i>
                                            </p>
                                            <div>
                                                <p style="font-size: 40px;" id="demo">

                                                </p>
                                            </div>
                                            <div class="panel status panel-info">
                                                <div class="panel-heading">
                                                    <h1 class="panel-title fancy ">Total Bids : <strong><a
                                                                    href="#tab2default">{{$data['bidCount']}}</a></strong>
                                                    </h1>
                                                </div>
                                            </div>
                                            <div class="panel status panel-success">
                                                <div class="panel-heading">
                                                    <h1 class="panel-title fancy">Highest Bid : <strong> <a
                                                                    href="#tab2default">
                                                                <small>Rs.</small>
                                                                {{$data['max_bid_value']}}</a></strong></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <input hidden type="text" value="{{$data['ad']->bid_close_date}}" id="bid_hidden_value">
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date(document.getElementById("bid_hidden_value").value).getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
                document.getElementById("abs_btn").disabled = true;
            }
        }, 1000);
    </script>
@endsection
