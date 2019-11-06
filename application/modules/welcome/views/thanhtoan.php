<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">
	  <title>WEB Bán Hàng</title>
	  <link href="<?php echo base_url("frontview/css/bootstrap.css");?>" rel="stylesheet">
      <base href="http://webdemo.com/">
   </head>
   <body id="home">
    <div class="container" style="margin-top:20px">
        <div class="row">
            <form action="/adddonhang" method="post">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label for="name">Tên của bạn</label>
                            <input type="text" name="name" class="form-control" required aria-describedby="emailHelp" placeholder="Tên Của Bạn">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" required placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="text">Số Điện Thoại Của Bạn</label>
                            <input type="text" name="phone" class="form-control" required placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="magg" value="<?php echo $magg;?>">
                        </div>
                        <div class="form-group">
                            <h3>Tổng Tiền Đơn Hàng</h3>
                            <h4><?php echo number_format($this->cart->total()); ?> VNĐ</h4>
                        </div>
                        <div class="form-group">
                            <h3>Tổng Tiền Đơn Hàng Sau Khi Giảm Giá</h3>
                            <h4><?php echo number_format($kq); ?> VNĐ</h4>
                            <input type="hidden" name="kq" value="<?php echo $kq;?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <?php
                        foreach ($list as $p) { ?>
                            <input type="text" name="name_product" value="<?php echo $p['name'];?>" disabled>
                            <a href=""><img style="width:10ppx;height:50px" src="<?php echo base_url("frontadmin/images/").$p['img']?>" alt=""></a>
                        <?php } ?>
                        <p style="color:red;"><span>Số lượng sản phẩm: </span><?php echo $this->cart->total_items();?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center"><button type="submit" class="btn btn-danger">Đặt Hàng</button></div>
                </div>
            </form>
        </div>
    </div>
	<script type="text/javascript" src="<?php echo base_url("frontview/js/bootstrap.min.js");?>"></script>
   </body>
</html>