@extends('layouts.admin_layout')
@section('content')
    <style>
        .custom-block:hover {
            background: #d22846;
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
                    <h1 class="page-title">Total Users</h1>
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
                                    <th>name</th>
                                    <th>phone</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Email</th>
                                    <th>name</th>
                                    <th>phone</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>
                                            @if($user->isBlocked == null)
                                                Active
                                            @else
                                                Blocked
                                            @endif
                                        </td>
                                        <td>
                                            <a  @if($user->isBlocked == null)
                                                    href="{{url('admin/block_user/' . $user->id)}}"
                                                @endif
                                               class="btn btn-sm btn-icon btn-pure btn-default on-default custom-block">
                                                <i class=""
                                                   aria-hidden="true"></i>Block
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
