@extends('layouts.total')
@section('content')
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <section id="intro-hero"
                             style="background: rgba(0, 0, 0, 0) url(http://localhost/multiauth/resources/theme-assets/wp-content/black-friday-buy-credit-card-34577.jpg) center top no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 margin-top-50">
                                    <h3 class="hero-title">Bid Me</h3>
                                    <h2> Bid Now </h2>
                                    <p class="hero-tagline">
                                        Bid-Me is a web based system which is developed to provide different features
                                        in one .It is online auction site where user can sell and buy their product
                                        without wasting of time and he can do all this at anywhere.
                                    </p>
                                    <div class="intro-btn">
                                        <a href="{{url('posts/create')}}" class="btn btn-theme btn-round">Post Free
                                            Ad</a>
                                    </div>
                                </div> <!-- END col-lg-6 hero-text-->
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <form style="opacity: 0.95;" class="form-join" method="get"
                                          action="{{url('search')}}">
                                        <h4>What are you looking for ?</h4>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input class="form-control" autocomplete="off" name="search1"
                                                   placeholder="What Are You Looking For..." type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Select Category</label>
                                            <select class="category form-control" name="search2">
                                                <option label="Select Category" value="">Select Category</option>
                                                <option value="bike">Bike</option>
                                                <option value="car">Car</option>
                                                <option value="mobile">Mobiles</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Brand</label>
                                            <input class="form-control" autocomplete="off" name="search3"
                                                   placeholder="What Brand You Looking For..." type="text">
                                        </div>

                                        <button class="btn btn-theme btn-block" type="submit">search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <section class="gray">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-sm-12 grid-section">
                                    <div class="grid-card">
                                        <div class="heading-panel">
                                            <div class="col-xs-12 col-md-12 col-sm-12">
                                                <h3 class="main-title text-left">
                                                    Latest Ads
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="featured-slider-1 owl-carousel owl-theme">
                                            @foreach($total as $item)
                                                <div class="item">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="listing-card">
                                                            <div class="image-area">
                                                                <a href="{{url('detailed/'.$item->id)}}"><img
                                                                            style="height: 163.5px;"
                                                                            src="http://localhost/multiauth/public/postImages/{{$item->image}}"
                                                                            alt="" class="img-responsive"></a>
                                                            </div>
                                                            <div class="listing-detail">
                                                                <div class="listing-content">
                                                                    <div class="listing-title">
                                                                        <a href="{{url('detailed/'.$item->id)}}"
                                                                           title="Xperia Z5 Premium">{{$item->title}}</a>
                                                                    </div>
                                                                    <span
                                                                            class="listing-price">Rs. {{$item->bid_start_price}}
                                                                        <span style="font-size: 13px;color: #000;">(Bid Start Price)</span></span>
                                                                    <ul>
                                                                        <li>
                                                                            Category : {{$item->category}}
                                                                        </li>
                                                                        <li><span>Close Date</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-clock-o fa-fw"></i><span>{{$item->bid_close_date}}</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <section class="gray">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <div class="grid-card">
                                        <div class="col-md-12">
                                            <div class="heading-panel"><h3 class="main-title text-left">Categories </h3>
                                            </div>
                                            <div class="category_gridz small-size">
                                                <a href="{{url('ads/car')}}">
                                                    <span class="category_new">
                                                        <img alt="Real Estate"
                                                             src="https://adforest.scriptsbundle.com/wp-content/uploads/2017/10/cars.png"
                                                             title="Real Estate">
                                                    </span>
                                                    <span class="title">Cars</span>
                                                </a>
                                                <a href="{{url('ads/mobile')}}">
                                                    <span class="category_new">
                                                        <img alt="Real Estate"
                                                             src="https://cdn2.iconfinder.com/data/icons/color-svg-vector-icons-2/512/mobile_phone-512.png"
                                                             title="Real Estate">
                                                    </span>
                                                    <span class="title">Cell Phones</span>
                                                </a>
                                                <a href="{{url('ads/bike')}}">
                                                    <span class="category_new">
                                                        <img alt="Real Estate"
                                                             src="https://adforest.scriptsbundle.com/wp-content/uploads/2017/10/cycling.png"
                                                             title="Real Estate">
                                                    </span>
                                                    <span class="title">Bikes</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 blog-sidebar">
                                    <div class="panel panel-default">
                                        <!-- Heading -->
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a>
                                                    Featured Ads </a>
                                            </h4>
                                        </div>
                                        <!-- Content -->
                                        <div class="panel-collapse">
                                            <div class="panel-body recent-ads">
                                                <div class="featured-slider-3 owl-carousel owl-theme owl-responsive-1000 owl-loaded owl-drag">
                                                    <div class="owl-stage-outer">
                                                        <div class="owl-stage"
                                                             style="transform: translate3d(-984px, 0px, 0px); transition: all 0.25s ease 0s; width: 3608px;">
                                                            <div class="owl-item cloned" style="width: 328px;">
                                                                <div class="item">
                                                                    <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                                                        <!-- Ad Box -->
                                                                        <div class="category-grid-box">

                                                                            <!-- Ad Img -->
                                                                            <div class="category-grid-img">
                                                                                <img class="img-responsive"
                                                                                     alt="Honda Civic 2017 Type R"
                                                                                     src="https://adforest-wpml.scriptsbundle.com/wp-content/uploads/2017/02/Honda-Civic-2017-Type-R-5-1-313x234.jpg">
                                                                                <!-- Ad Status -->
                                                                                <!-- User Review -->
                                                                                <div class="user-preview">
                                                                                    <a href="https://adforest-wpml.scriptsbundle.com/author/adforest-wpml/?type=ads">
                                                                                        <img src="https://adforest-wpml.scriptsbundle.com/wp-content/uploads/2017/03/default-user-1.jpg"
                                                                                             class="avatar avatar-small"
                                                                                             alt="Honda Civic 2017 Type R">
                                                                                    </a>
                                                                                </div>

                                                                                <!-- View Details -->
                                                                                <a href="https://adforest-wpml.scriptsbundle.com/ad/honda-civic-2017-type-r/"
                                                                                   class="view-details">
                                                                                    View Details </a>
                                                                            </div>
                                                                            <!-- Ad Img End -->
                                                                            <div class="short-description">
                                                                                <!-- Ad Category -->
                                                                                <div class="category-title">
                                                                                    <span class="padding_cats"><a
                                                                                                href="https://adforest-wpml.scriptsbundle.com/ad_category/vehicles/">Vehicles</a></span><span
                                                                                            class="padding_cats"><a
                                                                                                href="https://adforest-wpml.scriptsbundle.com/ad_category/cars/">Cars</a></span>
                                                                                </div>
                                                                                <!-- Ad Title -->
                                                                                <h3>
                                                                                    <a href="https://adforest-wpml.scriptsbundle.com/ad/honda-civic-2017-type-r/">Honda
                                                                                        Civic 2017 Type R</a></h3>
                                                                                <!-- Price -->
                                                                                <div class="price">
                                                                                    ₨768,390.00<span class="negotiable">(Auction)</span>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Addition Info -->
                                                                            <div class="ad-info">
                                                                                <ul>
                                                                                    <li><i class="fa fa-map-marker"></i>628-720
                                                                                        E Vine Dr, Fort Collins, CO
                                                                                        80524, USA
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Ad Box End -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item cloned" style="width: 328px;">
                                                                <div class="item">
                                                                    <div class="col-md-12 col-xs-12 col-sm-12 no-padding">
                                                                        <!-- Ad Box -->
                                                                        <div class="category-grid-box">

                                                                            <!-- Ad Img -->
                                                                            <div class="category-grid-img">
                                                                                <img class="img-responsive"
                                                                                     alt="Honda Civic 2017 Type R"
                                                                                     src="https://adforest-wpml.scriptsbundle.com/wp-content/uploads/2017/02/Honda-Civic-2017-Type-R-5-1-313x234.jpg">
                                                                                <!-- Ad Status -->
                                                                                <!-- User Review -->
                                                                                <div class="user-preview">
                                                                                    <a href="https://adforest-wpml.scriptsbundle.com/author/adforest-wpml/?type=ads">
                                                                                        <img src="https://adforest-wpml.scriptsbundle.com/wp-content/uploads/2017/03/default-user-1.jpg"
                                                                                             class="avatar avatar-small"
                                                                                             alt="Honda Civic 2017 Type R">
                                                                                    </a>
                                                                                </div>

                                                                                <!-- View Details -->
                                                                                <a href="https://adforest-wpml.scriptsbundle.com/ad/honda-civic-2017-type-r/"
                                                                                   class="view-details">
                                                                                    View Details </a>
                                                                            </div>
                                                                            <!-- Ad Img End -->
                                                                            <div class="short-description">
                                                                                <!-- Ad Category -->
                                                                                <div class="category-title">
                                                                                    <span class="padding_cats"><a
                                                                                                href="https://adforest-wpml.scriptsbundle.com/ad_category/vehicles/">Vehicles</a></span><span
                                                                                            class="padding_cats"><a
                                                                                                href="https://adforest-wpml.scriptsbundle.com/ad_category/cars/">Cars</a></span>
                                                                                </div>
                                                                                <!-- Ad Title -->
                                                                                <h3>
                                                                                    <a href="https://adforest-wpml.scriptsbundle.com/ad/honda-civic-2017-type-r/">Honda
                                                                                        Civic 2017 Type R</a></h3>
                                                                                <!-- Price -->
                                                                                <div class="price">
                                                                                    ₨768,390.00<span class="negotiable">(Auction)</span>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Addition Info -->
                                                                            <div class="ad-info">
                                                                                <ul>
                                                                                    <li><i class="fa fa-map-marker"></i>628-720
                                                                                        E Vine Dr, Fort Collins, CO
                                                                                        80524, USA
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Ad Box End -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-nav">
                                                        <button type="button" role="presentation" class="owl-prev"><i
                                                                    class="fa fa-angle-left"></i></button>
                                                        <button type="button" role="presentation" class="owl-next"><i
                                                                    class="fa fa-angle-right"></i></button>
                                                    </div>
                                                    <div class="owl-dots disabled"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

