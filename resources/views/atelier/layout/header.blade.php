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
    <link href="css/atelier/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="css/atelier/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/atelier/header.css" rel="stylesheet" type="text/css"> 
    <!--js-->
    <script src="js/atelier/jquery-2.1.1.min.js"></script> 
    <!--icons-css-->
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <!--Google Fonts-->
    <!-- <link href='https://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'> -->
    <!--static chart-->
    <script src="js/atelier/Chart.min.js"></script>
    <!--//charts-->
    <!-- geo chart -->
    <script src="http://cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <!-- <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script> -->
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/atelier/chartinator.js" ></script>
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
    <script src="js/atelier/skycons.js"></script>
    <!--//skycons-icons-->

    @yield('link')
  </head>

  
<body>  
<div class="page-container">
    <!--Header_section-->
    @yield('content')

</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
        <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
            <!--<img id="logo" src="" alt="Logo"/>--> 
        </a> </div>     
        <div class="menu">
          <ul id="menu" >
            <li id="menu-home"><a href="index.html"><i class="fa fa-tachometer"></i><span>主页</span></a></li>
            <li id="menu-home"><a href="index.html"><i class="fa fa-user"></i><span>成员</span></a></li>
            <li id="menu-home"><a href="index.html"><i class="fa fa-cubes"></i><span>项目</span></a></li>
            <li><a href="#"><i class="fa fa-cogs"></i><span>站点设置</span><span class="fa fa-angle-right" style="float: right"></span></a>
              <ul>
                <li><a href="grids.html">Grids</a></li>
                <li><a href="portlet.html">Portlets</a></li>                
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
    <script src="js/atelier/jquery.nicescroll.js"></script>
    <script src="js/atelier/scripts.js"></script>
    <!--//scrolling js-->
<script src="js/atelier/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     