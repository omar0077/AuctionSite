@extends('layouts.total')
@section('content')
    <div class=" bread-3 page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="header-page">
                        <h1>Post Ad</h1>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="small-breadcrumb modern-type">
                        <div class=" breadcrumb-link">
                            <ul>
                                <li>
                                    <a href="https://adforest.scriptsbundle.com/">
                                        Home
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:void(0);" class="active">
                                        Post Ad </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 10px;padding-bottom: 10px">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <form style="width: 100%;" method="post" action="<?php echo action('PostController@store'); ?>"
                  enctype='multipart/form-data'>
                @csrf
                <div class="form-grid">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>select ad type</label>
                            <select id="type_selector" onchange="myFunction()" class="form-control" name="ad_category">
                                <option value="">Select Option</option>
                                <option value="auction">auction</option>
                                <option value="absolute">absolute</option>
                            </select>
                        </div>
                    </div>
                    <script>
                        function myFunction() {
                            if (document.getElementById("type_selector").value === "auction") {
                                document.getElementById("absolute_value").disabled = true;
                                document.getElementById("bid_start_price").disabled = false;
                                document.getElementById("datepicker").disabled = false;
                            } else {
                                document.getElementById("absolute_value").disabled = false;
                                document.getElementById("bid_start_price").disabled = true;
                                document.getElementById("datepicker").disabled = true;
                            }
                        }
                    </script>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Title</label>
                            <input style="height: 55px;" placeholder="Enter Title" name="title" class="form-control"
                                   type="text">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="categoty">
                                <option value="">Select Option</option>
                                <option value="bike">Bike</option>
                                <option value="car">Car</option>
                                <option value="mobile">Cell Phones</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Brand</label>
                            <input style="height: 55px;" placeholder="Enter Brand" name="brand" class="form-control"
                                   type="text">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Condition</label>
                            <select class="form-control" name="condition">
                                <option value="">Select Option</option>
                                <option value="112|Buy">New</option>
                                <option value="149|Exchange">Used</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Bid Start Price</label>
                            <input id="bid_start_price" style="height: 55px;" name="bid_start_price"
                                   placeholder="Enter Bid Start Price"
                                   class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Absolute Value</label>
                            <input style="height: 55px;" name="absolute_value" id="absolute_value"
                                   placeholder="Enter Product's Fixed Price"
                                   class="form-control" type="text">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label">Bidding close date</label>
                            <input data-id="bid_close_date" autocomplete="off" style="height: 55px;"
                                   class="form-control"
                                   placeholder="Click to select" type="text"
                                   name="bid_close_date"
                                   id="datepicker">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Upload Featured Photo</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Upload Photos</label>
                            <input type="file" class="form-control" name="filename[]" multiple>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Map</label>
                            <input style="height: 55px;" placeholder="Enter Location" name="map_url"
                                   class="form-control"
                                   type="text">
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea rows="8" name="description" class="form-control"></textarea>
                        </div>
                    </div>

                    <input type="hidden" name="userId" value="{{ $user->id  }}">
                    <input type="hidden" name="userEmail" value="{{ $user->email  }}">
                    <input type="hidden" name="userPhone" value="{{ $user->phone  }}">
                    <input type="hidden" name="userName" value="{{ $user->name  }}">


                    <button class="btn btn-theme btn-lg btn-block" type="submit" id="sb_login_submit" >Post Your Ad
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
