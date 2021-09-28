@extends('layouts.total')
@section('content')
    <div class=" bread-3 page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="header-page">
                        <h1>Ads Listing</h1>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="small-breadcrumb modern-type">
                        <div class=" breadcrumb-link">
                            <ul>
                                <li>
                                    <a href="{{url('')}}">
                                        Home
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:void(0);" class="active">
                                        Ads </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section class="gray">
        <div class="container">
            <div class="row" style="padding-bottom: 10px;padding-top: 10px">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="grid-card">
                        <div class="col-md-12">
                            <div class="heading-panel"><h3 class="main-title text-left">{{$category}}s </h3></div>
                            @if(count($ads) < 1)
                                <h2>Sorry! No ad found </h2>
                            @else
                                @foreach($ads as $ad)
                                    <div class="ads-list-archive">
                                        <!-- Image Block -->
                                        <div class="col-lg-4 col-md-4 col-sm-4 no-padding">
                                            <!-- Img Block -->
                                            <div class="ad-archive-img list-3">
                                                <a href="{{url('detailed/'.$ad->id)}}">
                                                    <img style="height: 167px;"
                                                         src="http://localhost/multiauth/public/postImages/{{$ad->image}}"
                                                         alt="Beautiful Parrot" class="img-responsive">

                                                </a>
                                            </div>
                                            <!-- Img Block -->
                                        </div>
                                        <!-- Ads Listing -->
                                        <div class="clearfix visible-xs-block"></div>
                                        <!-- Content Block -->
                                        <div class="col-lg-8 col-md-8 col-sm-8 no-padding">
                                            <!-- Ad Desc -->
                                            <div class="ad-archive-desc">
                                                <div class="" style="float: right">
                                                    <label>Bid Start Price : </label>
                                                    <span style="color: #f58936;">{{$ad->bid_start_price}}</span>
                                                </div>
                                                <!-- Title -->
                                                <h4><a href="{{url('detailed/'.$ad->id)}}">{{$ad->title}}</a>
                                                </h4>
                                                <!-- Category -->
                                                <div class="category-title"><span class="padding_cats"><a
                                                                href="">{{$ad->category}}</a></span>
                                                </div>
                                                <!-- Short Description -->
                                                <div class="clearfix visible-xs-block"></div>
                                                <p style="overflow: hidden;height: 49px;"
                                                   class="hidden-sm"> {{$ad->description}}</p>
                                                <div class="clearfix archive-history">
                                                    <div class="last-updated">Posted : {{$ad->created_at}}</div>
                                                    <div class="ad-meta">
                                                        <a href="{{url('detailed/'.$ad->id)}}"
                                                           class="btn btn-success"><i
                                                                    class="fa fa-phone"></i> View
                                                            Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            {{--                            <div class="clearfix"></div>--}}
                            {{--                            <div class="text-center">--}}
                            {{--                                <div class="load-more-btn"><a href="modern/search-results/index.html"--}}
                            {{--                                                              target="_blank"--}}
                            {{--                                                              class="btn btn-theme btn-block btn-white">--}}
                            {{--                                        View All Ads </a></div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 blog-sidebar">
                    <div class="panel panel-default">
                        <!-- Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a>
                                    Recent Ads </a>
                            </h4>
                        </div>
                        <!-- Content -->
                        <div class="panel-collapse">
                            <div class="panel-body recent-ads">
                                <div class="recent-ads-list">
                                    <div class="recent-ads-container">
                                        <div class="recent-ads-list-image">
                                            <a href="ad/xperia-z5-premium/index.html"
                                               class="recent-ads-list-image-inner">
                                                <img alt="Xperia Z5 Premium"
                                                     src="http://localhost/multiauth/resources/theme-assets/wp-content/uploads/2017/04/sony-pre-brief-phones-9139-029-313x234.jpg">
                                            </a><!-- /.recent-ads-list-image-inner -->
                                        </div>
                                        <!-- /.recent-ads-list-image -->
                                        <div class="recent-ads-list-content">
                                            <h3 class="recent-ads-list-title">
                                                <a href="ad/xperia-z5-premium/index.html">Xperia Z5
                                                    Premium</a>
                                            </h3>
                                            <ul class="recent-ads-list-location">
                                                <li><a href="javascript:void(0);">718 Peoria St, Aurora, CO
                                                        80011, USA</a></li>
                                            </ul>
                                            <div class="recent-ads-list-price">
                                                ¥300.00
                                            </div>
                                            <!-- /.recent-ads-list-price -->
                                        </div>
                                        <!-- /.recent-ads-list-content -->
                                    </div>
                                    <!-- /.recent-ads-container -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
