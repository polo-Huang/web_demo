@extends('auth.layout.header')

@section('title')
  注册
@endsection

@section('link')
  <!-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> -->
@endsection

@section('content')
<div class="col-sm-5 form-box">
    <div class="form-top">
        <div class="form-top-left">
            <h3>注册</h3>
            <p>填写下面的表格即可访问:</p>
        </div>
        <div class="form-top-right">
            <i class="fa fa-pencil"></i>
        </div>
    </div>
    <div class="form-bottom">
        <form role="form" action="{{ action('Auth\RegisterController@register') }}" method="post" class="registration-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="form-group">
                <label class="sr-only" for="name">称谓</label>
                <input type="text" name="name" placeholder="称谓" class="form-first-name form-control" id="form-first-name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                  <small class="form-control-feedback">{{ $errors->first('name') }}</small>
                @endif
            </div>
            <div class="form-group">
                <label class="sr-only" for="email">邮箱</label>
                <input type="text" name="email" placeholder="邮箱" class="form-last-name form-control" id="form-last-name" value="{{ old('email') }}">
                @if ($errors->has('email'))
                  <small class="form-control-feedback">{{ $errors->first('email') }}</small>
                @endif
            </div>
            <div class="form-group">
                <label class="sr-only" for="password">密码</label>
                <input type="password" name="password" placeholder="密码" class="form-email form-control" id="form-email">
                @if ($errors->has('password'))
                  <small class="form-control-feedback">{{ $errors->first('password') }}</small>
                @endif
            </div>
            <div class="form-group">
                <label class="sr-only" for="password_confirmation">确认密码</label>
                <input type="password" name="password_confirmation" placeholder="确认密码" class="form-email form-control" id="form-email">
                @if ($errors->has('password_confirmation'))
                  <small class="form-control-feedback">{{ $errors->first('password_confirmation') }}</small>
                @endif
            </div>
            <button type="submit" class="btn">注册</button>
        </form>
    </div>
</div>

@endsection