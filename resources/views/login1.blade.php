@extends('layouts.total')
@section('content')
    <div class=" bread-3 page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="header-page">
                        <h1>Login</h1>
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
                                        Login </a>
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
                    <div class="main-content-area clearfix bg-white">
                        <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
                        <section class="section-padding error-page bg-white">
                            <!-- Main Container -->
                            <div class="container">
                                <!-- Row -->
                                <div class="row">
                                    <!-- Middle Content Area -->
                                    <div class="col-md-6 col-md-push-3 col-sm-12 col-xs-12">
                                        <!--  Form -->
                                        <div class="form-grid">
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-6 col-xs-12 col-sm-6"><a--}}
                                                        {{--class="btn btn-block btn-social btn-facebook" onclick="hello('facebook').login({--}}
{{--scope : 'email',--}}
{{--})">--}}
                                                        {{--<span class="fa fa-facebook"></span>Facebook--}}
                                                    {{--</a></div>--}}
                                                {{--<div class="col-md-6 col-xs-12 col-sm-6"><a--}}
                                                        {{--class="btn btn-block btn-social btn-google" onclick="hello('google').login({--}}
{{--scope : 'email'--}}
{{--})">--}}
                                                        {{--<span class="fa fa-google"></span>Google--}}
                                                    {{--</a></div>--}}
                                            {{--</div>--}}
                                            {{--<hr>--}}
                                            {{--<div class="center-line">OR</div>--}}
                                            {{--<hr>--}}
                                            <form id="sb-login-form">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input placeholder="Your Email" class="form-control" type="email"
                                                           data-parsley-type="email" data-parsley-required="true"
                                                           data-parsley-error-message="Please enter your valid email."
                                                           data-parsley-trigger="change" name="sb_reg_email"
                                                           id="sb_reg_email">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input placeholder="Your Password" class="form-control"
                                                           type="password"
                                                           data-parsley-required="true"
                                                           data-parsley-error-message="Please enter your password."
                                                           name="sb_reg_password">
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-7">
                                                            <div class="skin-minimal">
                                                                <ul class="list">
                                                                    <li>
                                                                        <input type="checkbox" name="is_remember"
                                                                               id="is_remember">
                                                                        <label for="is_remember">Remember Me</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-5 text-right">
                                                            <p class="help-block"><a data-target="#myModal"
                                                                                     data-toggle="modal">Forgot
                                                                    password?</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button class="btn btn-theme btn-lg btn-block" type="submit"
                                                        id="sb_login_submit">Login
                                                </button>
                                                <button class="btn btn-theme btn-lg btn-block no-display" type="button"
                                                        id="sb_login_msg">Processing...
                                                </button>
                                                <button class="btn btn-theme btn-lg btn-block no-display" type="button"
                                                        id="sb_login_redirect">Redirecting...
                                                </button>
                                                <br/>
                                                <p class="text-center"><a href="../register/index.html">Sign up for an
                                                        account.</a>
                                                </p>
                                                <input type="hidden" id="nonce" value="1554749864"/>
                                                <input type="hidden" id="get_action" value="login"/>
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
                    <div class="custom-modal">
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header rte">
                                        <h2 class="modal-title">Forgot Your Password ?</h2>
                                    </div>

                                    <form id="sb-forgot-form">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input placeholder="Your Email" class="form-control" type="email"
                                                       data-parsley-type="email" data-parsley-required="true"
                                                       data-parsley-error-message="Please enter valid email."
                                                       data-parsley-trigger="change" name="sb_forgot_email"
                                                       id="sb_forgot_email">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-dark" type="submit" id="sb_forgot_submit">Reset My
                                                Account
                                            </button>
                                            <button class="btn btn-dark" type="button" id="sb_forgot_msg">Processing...
                                            </button>

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
