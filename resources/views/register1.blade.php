@extends('layouts.total')
@section('content')
    <div class=" bread-3 page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="header-page">
                        <h1>Register</h1>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="small-breadcrumb modern-type">
                        <div class=" breadcrumb-link">
                            <ul>
                                <li>
                                    <a href="../index.html">
                                        Home
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:void(0);" class="active">
                                        Register </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="main-content-area clearfix">
                        <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
                        <section class="section-padding error-page ">
                            <!-- Main Container -->
                            <div class="container">

                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 resend_email"
                                         style="display:none;">
                                        <div role="alert" class="alert alert-info alert-dismissible alert-outline">
                                            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span
                                                    aria-hidden="true">&#10005;</span></button>
                                            Did not get an email?<a href="javascript:void(0)" id="resend_email"> Resend
                                                now.</a>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 contact_admin"
                                         style="display:none;">
                                        <div role="alert" class="alert alert-info alert-dismissible alert-outline">
                                            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span
                                                    aria-hidden="true">&#10005;</span></button>
                                            Still not get the email? <a href="index.html" id="resend_email"> Contact to
                                                admin.</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row -->
                                <div class="row">
                                    <!-- Middle Content Area -->
                                    <div class="col-md-6 col-md-push-3 col-sm-12 col-xs-12">
                                        <!--  Form -->
                                        <div class="form-grid">
                                            <form method="POST" action="{{ route('register') }}" id="sb-sign-form">
                                                @csrf

                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input placeholder="Your Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text"
                                                           data-parsley-required="true"
                                                           data-parsley-error-message="Please enter your name."
                                                           name="name" id="sb_reg_name">
                                                    @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Contact Number</label>
                                                    <input class="form-control" id="adforest_contact_number"
                                                           name="sb_reg_contact" data-parsley-type="integer"
                                                           data-parsley-required="true"
                                                           data-parsley-error-message="This field is required.Should be a valid integr value"
                                                           placeholder="Your Contact Number" type="text">

                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input placeholder="Your Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email"
                                                           data-parsley-type="email" data-parsley-required="true"
                                                           data-parsley-error-message="Please enter your valid email."
                                                           data-parsley-trigger="change" name="email"
                                                           id="sb_reg_email">
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input placeholder="Your Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                           type="password"
                                                           data-parsley-required="true"
                                                           data-parsley-error-message="Please enter your password."
                                                           name="password">
                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input placeholder="Your Password" class="form-control"
                                                           type="password"
                                                           data-parsley-required="true"
                                                           data-parsley-error-message="Please enter your password."
                                                           name="password_confirmation">
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-md-12 col-sm-12">
                                                            <div class="skin-minimal">
                                                                <ul class="list">
                                                                    <li>
                                                                        <input type="checkbox" id="minimal-checkbox-1"
                                                                               name="minimal-checkbox-1"
                                                                               data-parsley-required="true"
                                                                               data-parsley-error-message="Please accept terms and conditions.">
                                                                        <label for="minimal-checkbox-1">I agree to <a
                                                                                href="#"
                                                                                title="Term and Conditions"
                                                                                target=" _blank">Terms
                                                                                &amp; Condition Title</a></label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="text-center"><a href="../login/index.html">Already registered,
                                                        login
                                                        here.</a>
                                                </p>
                                            </form>
                                        </div>
                                        <!-- Form -->
                                    </div>
                                </div>
                                <!-- Row End -->
                            </div>
                            <!-- Main Container End -->
                        </section>
                    </div>
                    <!-- Main Content Area End -->
                    <!-- Forget Password -->
                </div>
            </div>
        </div>
    </div>
@endsection
