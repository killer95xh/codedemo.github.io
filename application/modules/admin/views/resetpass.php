
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url("frontadmin/css/bootstrap.min.css");?>" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url("frontadmin/css/style.css");?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url("frontadmin/css/style-responsive.css");?>" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url("frontadmin/css/font.css");?>" type="text/css"/>
<link href="<?php echo base_url("frontadmin/css/font-awesome.css");?>" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?php echo base_url("frontadmin/js/jquery2.0.3.min.js");?>"></script>
</head>
<body>
<div class="col-lg-4 col-lg-offset-4">
    <div class="text-center" style="height:100px;padding-top:15px">
      <h2>Reset Pass Word</h2>
      <p style="padding-top:10px">Vui lòng nhập tên email của bạn</p>
    </div>
    <?php $fattr = array('class' => 'form-signin'); echo form_open('http://webdemo.com/forgot', $fattr); ?>
    <div class="form-group">
      <?php echo form_input(array(
          'name'=>'email', 
          'id'=> 'email', 
          'placeholder'=>'Email', 
          'class'=>'form-control', 
          'value'=> set_value('email'))); ?>
      <?php echo form_error('email') ?>
    </div>
    <?php echo form_submit(array('value'=>'Submit', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>    
</div>
<script src="<?php echo base_url("frontadmin/js/bootstrap.js");?>"></script>
<script src="<?php echo base_url("frontadmin/js/jquery.dcjqaccordion.2.7.js");?>"></script>
<script src="<?php echo base_url("frontadmin/js/scripts.js");?>"></script>
<script src="<?php echo base_url("frontadmin/js/jquery.slimscroll.js");?>"></script>
<script src="<?php echo base_url("frontadmin/js/jquery.nicescroll.js");?>"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url("frontadmin/js/jquery.scrollTo.js");?>"></script>
</body>
</html>
