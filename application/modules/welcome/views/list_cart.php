<h1 style="text-align: center; margin-top: 100px;">Giỏ Hàng Của Bạn</h1>
<table border="1" width="700px" style="text-align: center; margin: 1px 300px;">
    <tr>
        <td>Số thứ tự</td>
        <td>Tên</td>
        <td>Số lượng</td>
        <td>HÌnh Ảnh</td>
        <td>Giá Tiền</td>
        <td>Thao Tác</td>
    </tr>
    <?php $count = 1;
    foreach ($list as $p) { ?>
    <tr>
        <td><?php echo $count++; ?></td>
        <td><?php echo $p['name']; ?></td>
        <td><?php echo $p['qty']; ?></td>
        <td><img style="width:10ppx;height:50px" src="<?php echo base_url("frontadmin/images/").$p['img']?>" alt=""></td>
        <td><?php echo number_format($p['price']); ?> vnđ</td>
        <td><a href="http://webdemo.com/remove/<?php echo $p['rowid'];?>">Delete</a></td>
    </tr>
    <?php } ?>
    
</table>

<div style="margin-left: 300px;">
    <h2 style="color:red;">Tổng Tiền: <?php echo number_format($this->cart->total()); ?> vnđ</h2>
    <p><a href="http://webdemo.com/remove">Xóa hết giỏ hàng</a></p>
    <p><a href="http://webdemo.com/trangchu">Tiếp Tục mua sắm</a></p>
    <form action="/thanhtoan" method="post">
        <div class="form-group">
            <br>
            <label for="text">Mã Giảm Giá</label>
            <input name="magg" type="text" class="form-control" placeholder="Mã Giảm Giá">
        </div>
        <br>
        <button type="submit">Đặt Hàng</button>
    </form>
    
</div>