
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="../../frontadmin/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="../../frontadmin/css/style.css" rel='stylesheet' type='text/css' />
<link href="../../frontadmin/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="../../frontadmin/css/font.css" type="text/css"/>
<link href="../../frontadmin/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="../../frontadmin/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="../../frontadmin/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="<?php echo base_url("frontadmin/js/jquery2.0.3.min.js");?>"></script>
<script src="<?php echo base_url("frontadmin/js/raphael-min.js");?>"></script>
<script src="<?php echo base_url("frontadmin/js/morris.js");?>"></script>
<base href="http://webdemo.com/">
</head>

<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <div class="pull-right">
                <input type="text" id="myInput" class="form-control search" placeholder=" Search">
                <!-- <input type="submit" name="submit"> -->
            </div>
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo base_url("frontadmin/images/2.png");?>">
				<span class="username"><?php echo $name;?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="logout"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="dasboard">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Danh Sách</span>
                    </a>
                    <ul class="sub">
						<li><a href="about">Danh Sách Thành Viên</a></li>
                        <li><a href="product">Danh Sách Sản Phẩm</a></li>
                        <li><a href="addsale">Mã Giảm Giá</a></li>
                        <li><a href="donhang">Đơn Hàng Đang Có</a></li>
                    </ul>
                </li>
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper" style="background:#fff">
	<?php
		$this->load->view($content_view); 
	?>
	</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<script src="<?php echo base_url("frontadmin/js/bootstrap.js");?>"></script>
<script src="<?php echo base_url("frontadmin/js/jquery.dcjqaccordion.2.7.js");?>"></script>
<script src="<?php echo base_url("frontadmin/js/scripts.js");?>"></script>
<script src="<?php echo base_url("frontadmin/js/jquery.slimscroll.js");?>"></script>
<script src="<?php echo base_url("frontadmin/js/jquery.nicescroll.js");?>"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url("frontadmin/js/jquery.scrollTo.js");?>"></script>
</body>
</html>
