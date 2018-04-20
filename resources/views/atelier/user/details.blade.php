@extends('atelier.layout.header')

@section('title')
用户列表
@endsection

@section('link')
<!-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> -->
@endsection

@section('content')
<div class="inner-block">
    <div class="inbox">
        <h2>Inbox Details</h2>
        <div class="col-md-4 compose">
            <div class="mail-profile">
                <div class="mail-pic">
                    <a href="#"><img src="{{ '/atelier/images/b3.png' }}" alt=""></a>
                </div>
                <div class="mailer-name">
                    <h5><a href="#">{{ $user->name }}</a></h5>
                    <h6><a href="mailto:info@example.com">malorum@gmail.com</a></h6>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="compose-bottom">
                <ul>
                    <li><a class="hilate" href="#"><i class="fa fa-inbox"> </i>Inbox</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"> </i>Sent Mail</a></li>
                    <li><a href="#"><i class="fa fa-star-o"> </i>Important</a></li>
                    <li><a href="#"><i class="fa fa-pencil-square-o"> </i>Drafts</a></li>
                    <li><a href="#"><i class="fa fa-trash-o"> </i>Trash</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@include('atelier.layout.footer')
@endsection
