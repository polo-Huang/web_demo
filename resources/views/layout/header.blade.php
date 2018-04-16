<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css"> 
    <link href="css/header.css" rel="stylesheet" type="text/css"> 
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    @yield('link')
  </head>

  <body>
    <!--Header_section-->
    <header id="header_wrapper">
      <div class="container header">
        <div class="header_box">
          <div class="logo"><a href="#"><img src="img/polo_logo.png" alt="logo"></a></div>
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
          <div id="main-nav" class="collapse navbar-collapse navStyle">
          <ul class="nav navbar-nav" id="mainNav">
            <li class="active"><a href="#hero_section" class="scroll-link">首页</a></li>
            <li><a href="#aboutUs" class="scroll-link">关于我们</a></li>
            <li><a href="#service" class="scroll-link">服务</a></li>
            <li><a href="#Portfolio" class="scroll-link">项目</a></li>
            <li><a href="#clients" class="scroll-link">客户</a></li>
            <li><a href="#team" class="scroll-link">团队</a></li>
            <li><a href="#contact" class="scroll-link">联系我们</a></li>
          </ul>
          </div>
       </nav>
        </div>
      </div>
    </header>
    <!--Header_section-->
    @yield('content')

    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script> 
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script> 
    <script src="contact/jqBootstrapValidation.js"></script>
    <script src="contact/contact_me.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

  </body>
</html>