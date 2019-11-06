<div class="col-12">
    <table class="table table-bordered" style="margin-top:20px">
        <thead>
            <tr>
                <th>Tên Khách Hàng</th>
                <th>Email</th>
                <th>Số Điện Thoại</th>
                <th>Tên Sản Phẩm</th>
                <th>Số Lượng</th>
                <th>Tổng Tiền Chưa Khuyến Mãi</th>
                <th>Mã Giảm Giá</th>
                <th>Tổng Tiền Đã Giảm Giá</th>
                <th>Xóa Đơn</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php foreach ($donhang as $i_key => $sz_Product) {?>
                <tr>
                    <td style="vertical-align: middle;"><?php echo $sz_Product->name_user;?></td>
                    <td style="vertical-align: middle;"><?php echo $sz_Product->email;?></td>
                    <td style="vertical-align: middle;"><?php echo $sz_Product->phone;?></td>
                    <td style="vertical-align: middle;"><?php echo $sz_Product->name;?></td>
                    <td style="vertical-align: middle;"><?php echo $sz_Product->qty;?></td>
                    <td style="vertical-align: middle;"><?php echo number_format($sz_Product->price);?> VNĐ</td>
                    <td style="vertical-align: middle;"><?php echo $sz_Product->gg;?></td>
                    <td style="vertical-align: middle;"><?php echo number_format($sz_Product->pricegg);?> VNĐ</td>
                    <td style="vertical-align: middle;"><button class="btn btn-danger"><a href="removedon/<?php echo $sz_Product->id;?>" style="color:#fff">Xóa Đơn</a></button></td>
                    <!-- <td style="vertical-align: middle;"><?php if(($sz_Product->status) ==1 ){echo '<input type="checkbox" name="chech" />';}else {echo '<input type="checkbox" checked name="chech" />';} ?></td> -->
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>