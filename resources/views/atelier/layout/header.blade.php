<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <title>@yield('title')</title>

  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <link href="{{ asset('atelier/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
  <!-- Custom Theme files -->
  <link href="{{ asset('atelier/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
  <link href="{{ asset('atelier/css/header.css') }}" rel="stylesheet" type="text/css"> 
  <!--js-->
  <script src="{{ asset('atelier/js/jquery-2.1.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery.form.js') }}"></script>
  <!--icons-css-->
  <link href="{{ asset('atelier/css/font-awesome.css') }}" rel="stylesheet"> 
  <!--Google Fonts-->
  <!-- <link href='https://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'> -->
  <!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'> -->
  <!--static chart-->
  <script src="{{ asset('atelier/js/Chart.min.js') }}"></script>
  <!--//charts-->
  <!-- geo chart -->
  <script src="http://cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <!-- <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script> -->
  <!--<script src="lib/html5shiv/html5shiv.js') }}"></script>-->
  <!-- Chartinator  -->
  <script src="{{ asset('atelier/js/chartinator.js') }}"></script>
  <script type="text/javascript">
        // jQuery(function ($) {

        //     var chart3 = $('#geoChart').chartinator({
        //         tableSel: '.geoChart',

        //         columns: [{role: 'tooltip', type: 'string'}],

        //         colIndexes: [2],

        //         rows: [
        //             ['China - 2015'],
        //             ['Colombia - 2015'],
        //             ['France - 2015'],
        //             ['Italy - 2015'],
        //             ['Japan - 2015'],
        //             ['Kazakhstan - 2015'],
        //             ['Mexico - 2015'],
        //             ['Poland - 2015'],
        //             ['Russia - 2015'],
        //             ['Spain - 2015'],
        //             ['Tanzania - 2015'],
        //             ['Turkey - 2015']],

        //         ignoreCol: [2],

        //         chartType: 'GeoChart',

        //         chartAspectRatio: 1.5,

        //         chartZoom: 1.75,

        //         chartOffset: [-12,0],

        //         chartOptions: {

        //             width: null,

        //             backgroundColor: '#fff',

        //             datalessRegionColor: '#F5F5F5',

        //             region: 'world',

        //             resolution: 'countries',

        //             legend: 'none',

        //             colorAxis: {

        //                 colors: ['#679CCA', '#337AB7']
        //             },
        //             tooltip: {

        //                 trigger: 'focus',

        //                 isHtml: true
        //             }
        //         }


        //     });                       
        // });
      </script>
      <!--geo chart-->

      <!--skycons-icons-->
      <script src="{{ asset('atelier/js/skycons.js') }}"></script>
      <!--//skycons-icons-->

      <script src="{{ asset('atelier/js/header.js') }}"></script>
      @yield('link')
    </head>


    <body>  
      <div class="page-container">
        <div class="left-content">
          <div class="mother-grid-inner">
            <!--header start here-->
            <div class="header-main">
              <div class="header-left">
                <div class="logo-name">
                  <a href="{{ url('atelier/index') }}"> <h1>Atelier</h1> 
                    <!--<img id="logo" src="" alt="Logo"/>--> 
                  </a>
                </div>
                <!--search-box-->
                <div class="search-box">
                  <form>
                    <input type="text" placeholder="Search..." required=""> 
                    <input type="submit" value="">
                  </form>
                </div><!--//end-search-box-->
                <div class="clearfix"> </div>
              </div>
              <div class="header-right">
                <div class="profile_details_left"><!--notifications of menu start -->
                  <ul class="nofitications-dropdown">
                    <li class="dropdown head-dpdn">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                      <ul class="dropdown-menu">
                        <li>
                          <div class="notification_header">
                            <h3>You have 3 new messages</h3>
                          </div>
                        </li>
                        <li>
                          <a href="#">
                            <div class="user_img"><img src="{{ '/atelier/images/p4.png' }}" alt=""></div>
                            <div class="notification_desc">
                              <p>Lorem ipsum dolor</p>
                              <p><span>1 hour ago</span></p>
                            </div>
                            <div class="clearfix"></div>
                          </a>
                        </li>
                        <li class="odd">
                          <a href="#">
                            <div class="user_img"><img src="{{ '/atelier/images/p2.png' }}" alt=""></div>
                            <div class="notification_desc">
                              <p>Lorem ipsum dolor </p>
                              <p><span>1 hour ago</span></p>
                            </div>
                            <div class="clearfix"></div>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="user_img"><img src="{{ '/atelier/images/p3.png' }}" alt=""></div>
                            <div class="notification_desc">
                              <p>Lorem ipsum dolor</p>
                              <p><span>1 hour ago</span></p>
                            </div>
                            <div class="clearfix"></div>
                          </a>
                        </li>
                        <li>
                          <div class="notification_bottom">
                            <a href="#">See all messages</a>
                          </div> 
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                      <ul class="dropdown-menu">
                        <li>
                          <div class="notification_header">
                            <h3>You have 3 new notification</h3>
                          </div>
                        </li>
                        <li><a href="#">
                          <div class="user_img"><img src="{{ '/atelier/images/p5.png' }}" alt=""></div>
                          <div class="notification_desc">
                            <p>Lorem ipsum dolor</p>
                            <p><span>1 hour ago</span></p>
                          </div>
                          <div class="clearfix"></div>  
                        </a></li>
                        <li class="odd"><a href="#">
                          <div class="user_img"><img src="{{ '/atelier/images/p6.png' }}" alt=""></div>
                          <div class="notification_desc">
                            <p>Lorem ipsum dolor</p>
                            <p><span>1 hour ago</span></p>
                          </div>
                          <div class="clearfix"></div>  
                        </a></li>
                        <li><a href="#">
                          <div class="user_img"><img src="{{ '/atelier/images/p7.png' }}" alt=""></div>
                          <div class="notification_desc">
                            <p>Lorem ipsum dolor</p>
                            <p><span>1 hour ago</span></p>
                          </div>
                          <div class="clearfix"></div>  
                        </a></li>
                        <li>
                          <div class="notification_bottom">
                            <a href="#">See all notifications</a>
                          </div> 
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                      <ul class="dropdown-menu">
                        <li>
                          <div class="notification_header">
                            <h3>You have 8 pending task</h3>
                          </div>
                        </li>
                        <li><a href="#">
                          <div class="task-info">
                            <span class="task-desc">Database update</span><span class="percentage">40%</span>
                            <div class="clearfix"></div>
                          </div>
                          <div class="progress progress-striped active">
                            <div class="bar yellow" style="width:40%;"></div>
                          </div>
                        </a></li>
                        <li><a href="#">
                          <div class="task-info">
                            <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                            <div class="clearfix"></div>
                          </div>
                          <div class="progress progress-striped active">
                            <div class="bar green" style="width:90%;"></div>
                          </div>
                        </a></li>
                        <li><a href="#">
                          <div class="task-info">
                            <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                            <div class="clearfix"></div>
                          </div>
                          <div class="progress progress-striped active">
                            <div class="bar red" style="width: 33%;"></div>
                          </div>
                        </a></li>
                        <li><a href="#">
                          <div class="task-info">
                            <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                            <div class="clearfix"></div>
                          </div>
                          <div class="progress progress-striped active">
                            <div class="bar  blue" style="width: 80%;"></div>
                          </div>
                        </a></li>
                        <li>
                          <div class="notification_bottom">
                            <a href="#">See all pending tasks</a>
                          </div> 
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div class="clearfix"> </div>
                </div>
                <!--notification menu end -->
                <div class="profile_details">
                  <ul>
                    <li class="dropdown profile_details_drop">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">
                          <span class="prfil-img"><img class="img_picture" width="50" height="50" src="{{ Auth::user()->picture == null ? '/atelier/images/p8.png' : Auth::user()->picture }}" alt=""> </span> 
                          <div class="user-name">
                            <p>{{ Auth::user()->name }}</p>
                            <span>{{ Auth::user()->role == null ? 'Administrator' : Auth::user()->role }}</span>
                          </div>
                          <i class="fa fa-angle-down lnr"></i>
                          <i class="fa fa-angle-up lnr"></i>
                          <div class="clearfix"></div>
                        </div>
                      </a>
                      <ul class="dropdown-menu drp-mnu">
                        <li> <a href="#"><i class="fa fa-cog"></i> 设置</a> </li> 
                        <li> <a href="{{ url('atelier/user/details/'.Auth::id()) }}"><i class="fa fa-user"></i> 我的信息</a> </li> 
                        <li> <a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> 注销</a> </li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="clearfix"> </div>       
              </div>
              <div class="clearfix"> </div> 
            </div>
            <!--heder end here-->

          </div>

          <!-- script-for sticky-nav -->
          <script>
              $(document).ready(function() {
                  var navoffeset=$(".header-main").offset().top;
                  // var scroll_function = function(){
                    var scrollpos=$(window).scrollTop(); 
                    if(scrollpos >=navoffeset){
                        $(".header-main").addClass("fixed");
                    }else{
                        $(".header-main").removeClass("fixed");
                    }
                  // };
                  // scroll_function;
                  // $(window).scroll(scroll_function);

              });
          </script>
          <!-- /script-for sticky-nav -->
          @yield('content')
        </div>
        <!--slider menu-->
        <div class="sidebar-menu">
          <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
            <!--<img id="logo" src="" alt="Logo"/>--> 
          </a> </div>     
          <div class="menu">
            <ul id="menu" >
              <li id="menu-home"><a href="{{ url('atelier/index') }}"><i class="fa fa-tachometer"></i><span>主页</span></a></li>
              <li id="menu-home"><a href="{{ url('atelier/users') }}"><i class="fa fa-user"></i><span>成员</span></a></li>
              <li id="menu-home"><a href="#"><i class="fa fa-cubes"></i><span>项目</span></a></li>
              <li><a href="#"><i class="fa fa-cogs"></i><span>站点设置</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul>
                  <li><a href="#">配置</a></li>
                  <li><a href="{{ url('/') }}">查看前端</a></li>
                </ul>
              </li>
              @if(0)
              <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>设置</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-comunicacao-sub" >
                  <li id="menu-mensagens" style="width: 120px" ><a href="buttons.html">Buttons</a>                  
                  </li>
                  <li id="menu-arquivos" ><a href="typography.html">Typography</a></li>
                  <li id="menu-arquivos" ><a href="icons.html">Icons</a></li>
                </ul>
              </li>
              <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>页面</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                 <li id="menu-academico-boletim" ><a href="login.html">Login</a></li>
                 <li id="menu-academico-avaliacoes" ><a href="signup.html">Sign Up</a></li>               
               </ul>
             </li>

             <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>
             <li><a href="#"><i class="fa fa-envelope"></i><span>Mailbox</span><span class="fa fa-angle-right" style="float: right"></span></a>
               <ul id="menu-academico-sub" >
                <li id="menu-academico-avaliacoes" ><a href="inbox.html">Inbox</a></li>
                <li id="menu-academico-boletim" ><a href="inbox-details.html">Compose email</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-cog"></i><span>System</span><span class="fa fa-angle-right" style="float: right"></span></a>
             <ul id="menu-academico-sub" >
              <li id="menu-academico-avaliacoes" ><a href="404.html">404</a></li>
              <li id="menu-academico-boletim" ><a href="blank.html">Blank</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-shopping-cart"></i><span>E-Commerce</span><span class="fa fa-angle-right" style="float: right"></span></a>
            <ul id="menu-academico-sub" >
              <li id="menu-academico-avaliacoes" ><a href="product.html">Product</a></li>
              <li id="menu-academico-boletim" ><a href="price.html">Price</a></li>
            </ul>
          </li>
          @endif
        </ul>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <!--slide bar menu end here-->
  <script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
      if (toggle)
      {
        $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
        $("#menu span").css({"position":"absolute"});
      }
      else
      {
        $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
        setTimeout(function() {
          $("#menu span").css({"position":"relative"});
        }, 400);
      }               
      toggle = !toggle;
    });
  </script>
  <!--scrolling js-->
  <script src="{{ asset('atelier/js/jquery.nicescroll.js') }}"></script>
  <script src="{{ asset('atelier/js/scripts.js') }}"></script>
  <!--//scrolling js-->
  <script src="{{ asset('atelier/js/bootstrap.js') }}"> </script>
  <!-- mother grid end here-->
</body>
</html>                     