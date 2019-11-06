<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">
	  <title>WEB Bán Hàng</title>
	  <link href="frontview/css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="frontview/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="frontview/css/flexslider.css" type="text/css" media="screen"/>
      <link href="frontview/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="frontview/css/style.css" rel="stylesheet">
      <base href="http://webdemo.com/">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="trangchu"><img src="frontview/images/logo.png" alt="FlatShop"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-3">
                           </div>
                           <div class="col-md-6">
                           </div>
                           <div class="col-md-3">
                              <ul class="usermenu">
                                 <li><a href="login" class="log">Login</a></li>
                                 <li><a href="checkout2.html" class="reg">Register</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
                           </li>
                           <li class="option-cart">
                              <a href="cart" class="cart-icon">cart <span class="cart_no"><?php echo $this->cart->total_items();?></span></a>
                              <ul class="option-cart-item">
                                 <?php foreach($list as $p) {?>
                                 <li>
                                    <div class="cart-item">
                                       <div class="image"><img src="<?php echo base_url("frontadmin/images/").$p['img']?>" alt=""></div>
                                       <div class="item-description" style="width:100px">
                                          <p class="name"><?php echo $p['name']; ?></p>
                                          <p>Số Lượng: <span class="light-red"><?php echo $p['qty']; ?></span></p>
                                       </div>
                                       <div class="right">
                                          <p class="price"><?php echo number_format($p['price']); ?></p>
                                          <a href="http://webdemo.com/remove/<?php echo $p['rowid'];?>" class="remove"><img src="frontview/images/remove.png" alt="remove"></a>
                                       </div>
                                    </div>
                                 </li>
                                 <?php }?>
                                 <li><span class="total">Tổng Tiền <strong><?php echo number_format($this->cart->total()); ?> vnđ</strong></span><button class="checkout"><a href="cart">CheckOut</a></button></li>
                              </ul>
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a></li>
                              <li><a href="#">Iphone</a></li>
                              <li><a href="#">San Sung</a></li>
                              <li><a href="productgird.html">blog</a></li>
                              <li><a href="contact.html">contact us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Paris show 2014</span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Collection For Winter</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="frontview/images/slider-image-01.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>Collection For Winter</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2>Etiam velit purus, luctus vitae velit sedauctor<br>egestas diam, Etiam velit purus.</h2>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="frontview/images/slider-image-02.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>New Fashion of 2013</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="frontview/images/slider-image-03.png" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="frontview/images/promotion-01.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="frontview/images/promotion-02.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="frontview/images/promotion-03.png" alt=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>Hot</strong> Products</h3>
                  <ul id="hot">
                     <li>
                        <div class="row">
                        
                           <?php
                              foreach ($spview as $i_key => $spview) {
                           ?>
                           <form action="/addcart" method="post">
                              <div class="col-md-3 col-sm-6">
                                 <div class="products">
                                    <input type="hidden" name="id" value="<?php echo $spview->pr_id?>" size="30" />
                                    <div class="thumbnail"><a href=""><img style="width:70%;height:200px" src="<?php echo base_url("frontadmin/images/").$spview->pr_img?>" alt="Product Name"></a></div>
                                    <div class="productname"><?php echo $spview->pr_title;?></div>
                                    <h4 class="price"><?php echo number_format($spview->pr_price);?> vnđ</h4>
                                    <div class="button_group"><button class="button add-cart" type="submit"> Add To Cart </button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                 </div>
                              </div>
                              </form>
                           <?php }?>
                           
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Featured </strong> Products</h3>
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <?php
                              foreach ($spvi as $i_key => $spvi) {
                           ?>
                              <form action="/addcart" method="post">
                                 <input type="hidden" name="id" value="<?php echo $spvi->pr_id?>" size="30" />
                                 <div class="col-md-3 col-sm-6">
                                    <div class="products">
                                       <div class="thumbnail"><a href="cart/<?php echo $spvi->pr_id;?>"><img style="width:70%;height:200px" src="<?php echo base_url("frontadmin/images/").$spvi->pr_img?>" alt="Product Name"></a></div>
                                       <div class="productname"><?php echo $spvi->pr_title;?></div>
                                       <h4 class="price"><?php echo number_format($spvi->pr_price);?> vnđ</h4>
                                       <div class="button_group"><button class="button add-cart" type="submit">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                    </div>
                                 </div>
                              </form>
                           <?php }?>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="our-brand">
                  <h3 class="title"><strong>Our </strong> Brands</h3>
                  <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
                  <ul id="braldLogo">
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="frontview/images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="frontview/images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="frontview/images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="frontview/images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="frontview/images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="frontview/images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="frontview/images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="frontview/images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="frontview/images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="frontview/images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="footer">
            <div class="footer-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="footer-logo"><a href="#"><img src="frontview/images/logo.png" alt=""></a></div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Contact <strong>Info</strong></h4>
                        <p>No. 08, Nguyen Trai, Hanoi , Vietnam</p>
                        <p>Call Us : (084) 1900 1008</p>
                        <p>Email : michael@leebros.us</p>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Customer<strong> Support</strong></h4>
                        <ul class="support">
                           <li><a href="#">FAQ</a></li>
                           <li><a href="#">Payment Option</a></li>
                           <li><a href="#">Booking Tips</a></li>
                           <li><a href="#">Infomation</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3">
                        <h4 class="title">Get Our <strong>Newsletter </strong></h4>
                        <p>Lorem ipsum dolor ipsum dolor.</p>
                        <form class="newsletter">
							<input type="text" name="" placeholder="Type your email....">
							<input type="submit" value="SignUp" class="button">
						</form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <p>Copyright © 2012. Designed by <a href="#">Michael Lee</a>. All rights reseved</p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social-icon">
                           <li><a target="_blank" href="https://www.instagram.com/nguyencaodan/" class="linkedin"></a></li>
                           <li><a href="#" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100007504576851" class="facebook"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>
         $( document ).ready(function() {
            $('.add-cart').click(function(){
               alert('Bạn đã thêm sản phẩm vào giỏ hàng');
            });
         });
      </script>
      <!-- Bootstrap core JavaScript==================================================-->
	  <script type="text/javascript" src="<?php echo base_url("frontview/js/jquery-1.10.2.min.js");?>"></script>
	  <script type="text/javascript" src="<?php echo base_url("frontview/js/jquery.easing.1.3.js");?>"></script>
	  <script type="text/javascript" src="<?php echo base_url("frontview/js/bootstrap.min.js");?>"></script>
	  <script type="text/javascript" src="<?php echo base_url("frontview/js/jquery.sequence-min.js");?>"></script>
	  <script type="text/javascript" src="<?php echo base_url("frontview/js/jquery.carouFredSel-6.2.1-packed.js");?>"></script>
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript" src="<?php echo base_url("frontview/js/script.min.js");?>" ></script>
   </body>
</html>