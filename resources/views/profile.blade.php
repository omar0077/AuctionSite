@extends('layouts.total')
@section('content')
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <section class="section-padding bg-gray">
                        <div class="container">
                            <div class="row">
                                <!-- Middle Content Area -->

                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <section class="search-result-item">
                                        <div class="image-link" href="javascript:void(0);">
                                            <img class="image" alt="Profile Picture"
                                                 src="http://localhost/multiauth/resources/theme-assets/wp-content/alt.png"
                                                 id="user_dp">
                                            <ul class="social-f">

                                            </ul>
                                        </div>
                                        <div class="search-result-item-body">
                                            <div class="row">
                                                <div class="col-md-5 col-sm-12 col-xs-12">

                                                    <h4 class="search-result-item-heading sb_put_user_name">
                                                        {{$data['user']->name}}</h4>

                                                    <p class="description">Account Created:
                                                        <?php
                                                        $account_created_date = explode(' ', $data['user']->created_at);
                                                        echo $account_created_date[0];
                                                        ?>
                                                    </p>
                                                    @if(Auth::user()->id != $data['user']->id)
                                                        <a href="{{url('report/'.$data['user']->id)}}">
                                                            <span class="label label-warning">Report</span>
                                                        </a>
                                                    @endif
                                                    <span class="label label-success sb_user_type"></span>


                                                </div>
                                                <div class="col-md-7 col-sm-12 col-xs-12">
                                                    <div class="row ad-history">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="user-stats">
                                                                <h2>{{$data['total_posts']->count()}}</h2>
                                                                <small>Total Listings</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="user-stats">
                                                                <h2>{{$data['pendingAds']->count()}}</h2>
                                                                <small>Pending Ads</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="user-stats">
                                                                <h2>{{$data['approvedCount']->count()}}</h2>
                                                                <small>Active ads</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- Middle Content Area  End -->
                            </div>
                            <br>
                            <div id="adforest_res">
                                <div style="background: white">

                                </div>

                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
