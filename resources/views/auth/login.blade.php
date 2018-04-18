@extends('auth.layout.header')

@section('title')
  登录
@endsection

@section('link')
  <!-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> -->
@endsection

@section('content')
    <div class="col-sm-5 form-box">
        <div class="form-top">
            <div class="form-top-left">
                <h3>登录</h3>
                <p>请输入你的邮箱密码:</p>
            </div>
            <div class="form-top-right">
                <i class="fa fa-pencil"></i>
            </div>
        </div>
        <div class="form-bottom">
            <form role="form" action="{{ action('Auth\LoginController@login') }}" method="post" class="registration-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label class="sr-only" for="form-first-name">邮箱</label>
                    <input type="text" name="email" placeholder="邮箱" class="form-first-name form-control" id="form-first-name">
                    @if ($errors->has('email'))
                      <small class="form-control-feedback">{{ $errors->first('email') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label class="sr-only" for="form-last-name">密码</label>
                    <input type="password" name="password" placeholder="密码" class="form-last-name form-control" id="form-last-name">
                    @if ($errors->has('password'))
                      <small class="form-control-feedback">{{ $errors->first('password') }}</small>
                    @endif
                </div>
                <button type="submit" class="btn">登录</button>
            </form>
        </div>
    </div>

@endsection