@extends('atelier.layout.header')

@section('title')
用户详情
@endsection

@section('link')
<link rel="stylesheet" href="{{ asset('atelier/css/user.css') }}">
<script src="{{ asset('atelier/js/user.js') }}"></script>
@endsection

@section('content')
<div class="inner-block details">
    <div class="inbox">
        <h2>用户详情</h2>
        <div class="col-md-4 compose">
            <div class="mail-profile">
                <div class="mail-pic">
                    <a href="" data-toggle="tab"><img class="img_picture" width="90" src="{{ $user->picture == null ? '/atelier/images/b3.png' : $user->picture }}" alt=""></a>
                </div>
                <div class="mailer-name">
                    <h5><a href="#">{{ $user->name }}</a></h5>
                    <h6><a href="mailto:info@example.com">{{ $user->email }}</a></h6>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="compose-bottom">
                <nav class="nav-sidebar">
                    <ul class="nav tabs">
                        <!-- <li><a href="#"><i class="fa fa-inbox"> </i>{{ $user->role }}</a></li> -->
                        <li class=""><a href="#tab_picture" data-toggle="tab"><i class="fa fa-picture-o"> </i>头像</a></li>
                        <li class="active"><a href="#tab_info" data-toggle="tab"><i class="fa fa-inbox"> </i>基本信息</a></li>
                        <li class=""><a href="#tab3" data-toggle="tab"><i class="fa fa-star-o"> </i>Important</a></li>
                        <li class=""><a href="#tab4" data-toggle="tab"><i class="fa fa-pencil-square-o"> </i>Drafts</a></li>
                        <li class=""><a href="#tab5" data-toggle="tab"><i class="fa fa-trash-o"> </i>Trash</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-md-8 mailbox-content compose-right tab-content tab-content-in">
            <!-- 基本信息 -->
            <div class="tab-pane active text-style div_form" id="tab_info">
                <div class="inbox-details-default div_show">
                    <div class="inbox-details-heading">
                        基本信息 <span class="btn_edit"><i class="fa fa-edit"></i></span></a>
                    </div>
                    <div class="inbox-details-body">
                        <dd>名字：{{ $user->name }}</dd>
                        <dd>邮箱：{{ $user->email }}</dd>
                        <dd>职位：{{ $user->role }}</dd>
                        <dd>电话：{{ $user->phone }}</dd>
                        <dd>地址：{{ $user->address }}</dd>
                        <dd>自我介绍：{{ $user->introduction }}</dd>
                    </div>
                </div>
                <div class="inbox-details-default div_edit">
                    <div class="inbox-details-heading">
                        修改信息
                    </div>
                    <div class="inbox-details-body">
                        <div class="alert alert-info">
                            请输入你的需要改动的内容
                        </div>
                        <form name="form_info" method="post" action="{{ action('Atelier\UserController@eidtInfo') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" value="{{ $user->name }}" placeholder="名字">
                                <div class="error_warning"></div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="email" value="{{ $user->email }}" placeholder="邮箱">
                                <div class="error_warning"></div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="role" value="{{ $user->role }}" placeholder="职位">
                                <div class="error_warning"></div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="phone" value="{{ $user->phone }}" placeholder="电话">
                                <div class="error_warning"></div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="2" name="address" placeholder="地址">{{ $user->address }}</textarea>
                                <div class="error_warning"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="6" name="introduction" placeholder="自我介绍">{{ $user->introduction }}</textarea>
                                <div class="error_warning"></div>
                            </div>
                            <input type="submit" value="提交">
                            <button class="btn_cancel form_btn btn_default">取消</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- //基本信息 -->
            <!-- 头像 -->
            <div class="tab-pane text-style div_form" id="tab_picture">
                <div class="inbox-details-default div_show">
                    <div class="inbox-details-heading">
                        头像 <span class="btn_edit"><i class="fa fa-edit"></i></span></a>
                    </div>
                    <div class="inbox-details-body text-center">
                        <img src="{{ $user->picture }}">
                    </div>
                </div>
                <div class="inbox-details-default div_edit">
                    <div class="inbox-details-heading">
                        修改头像
                    </div>
                    <div class="inbox-details-body">
                        <div class="alert alert-info">
                            请上传你的新头像
                        </div>
                        <form name="form_picture" method="post" action="{{ action('Atelier\UserController@eidtPicture') }}" files="ture">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="form-group">
                                <input class="form-control" type="file" name="picture">
                                <div class="error_warning"></div>
                            </div>
                            <input type="submit" value="提交">
                            <button class="btn_cancel form_btn btn_default">取消</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- //头像 -->
            <div class="tab-pane text-style" id="tab3">
                <div class="mailbox-border">
                    3
                </div>
            </div>
            <div class="tab-pane text-style" id="tab4">
                <div class="mailbox-border">
                    4
                </div>
            </div>
            <div class="tab-pane text-style" id="tab5">
                <div class="mailbox-border">
                    5
                </div>
            </div>
        </div>
    </div>
</div>

@include('atelier.layout.footer')
@endsection
