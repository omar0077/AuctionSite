@extends('layouts.admin_layout')
@section('content')
    <div class="container-fluid">

        <div class="page-header">
            <div class="row row-deck">
                <div class="col-md-6 col-sm-12">
                    <h1 class="page-title">Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div style="border: 0px;" class="card text-white bg-danger">
                    <div class="card-header"><h1>{{$count['pending']}}</h1></div>
                    <div class="card-body">
                        <p class="card-text">Pending Ads</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div style="border:0px;" class="card text-white bg-secondary">
                    <div class="card-header"><h1>{{$count['approved']}}</h1></div>
                    <div class="card-body">
                        <p class="card-text">Approved Ads</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div style="border: 0px;" class="card text-white bg-info">
                    <div class="card-header"><h1>{{$count['total']}}</h1></div>
                    <div class="card-body">
                        <p class="card-text">Total Ads</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
