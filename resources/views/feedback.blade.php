@extends('layouts.total')
@section('content')
    <section class="gray">
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
                <div>
                    <h2 style="color: black;">
                        Our Company Terms of Service
                    </h2>
                    <h3 style="color: black;">
                        dummy text omar saleem lorum ipsum jbaa
                    </h3>
                    <p style="color: black;">
                        These Terms of Service (“Terms”) govern your access to and use of our services, including our
                        various
                        websites, SMS, APIs, email notifications, applications, buttons, widgets, ads, commerce
                    </p>
                </div>
                <form style="width: 100%;" method="get" action="{{url('submit_report_to_admin')}}">
                    @csrf
                    <input hidden name="user_email" value="{{$data['user']->email}}">
                    <input hidden name="reported_user_email" value="{{$data['reported_user']->email}}">
                    <div class="form-grid">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Describe Your Report</label>
                                <textarea rows="8" name="report_msg" class="form-control"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-theme btn-lg btn-block" type="submit" id="sb_login_submit">Post Your Ad
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
