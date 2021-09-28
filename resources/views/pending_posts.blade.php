@extends('layouts.admin_layout')
@section('content')
    <style>
        .custom-approve:hover {
            background: #19bf75;
            color: white;
        }
    </style>
    <div class="container">
        @if(session('success'))
            <div class="container alert alert-success custom-hide"
                 style="margin-top:10px;background: #d4edda;line-height: 3; ">
                {{session('success')}}
            </div>
        @endif
    </div>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row row-deck">
                <div class="col-md-6 col-sm-12">
                    <h1 class="page-title">Pending Ads</h1>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Row</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-vcenter table-striped" cellspacing="0"
                                   id="addrowExample">
                                <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Email</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($pending_posts as $pending_post)
                                    <tr class="gradeA">
                                        <td>{{$pending_post->user_email}}</td>
                                        <td>{{$pending_post->title}}</td>
                                        <td>
                                            <?php
                                            if ($pending_post->postIsApproved == 0) { ?>
                                            Not Approved
                                            <?php }
                                            ?>
                                        </td>
                                        <td class="actions">
                                            <a href="{{url('admin/update_post/' . $pending_post->id)}}"
                                               class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove custom-approve">
                                                <i class="icon-check"
                                                   aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
