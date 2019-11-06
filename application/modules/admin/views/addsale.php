<form action="/adds" method="post">
    <button type="submit" class="btn btn-danger">Tạo mã Giảm Giá</button>
</form>
<div class="col-12">
    <table class="table table-bordered" style="margin-top:20px">
        <thead>
            <tr>
                <th>Mã Giảm Giá</th>
                <th>Trạng Thái</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php foreach ($listsale as $i_key => $lists) {?>
                <tr>
                    <td style="vertical-align: middle;"><?php echo $lists->sale_id;?></td>
                    <td style="vertical-align: middle;"><?php 
                        if(($lists->check) == 1 ) {
                            echo 'Mã Chưa Sử Dụng';
                        }
                        else {
                            echo 'Mã Đã Sử Dụng';
                        }
                    ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>