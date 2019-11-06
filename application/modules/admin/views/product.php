<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Thêm Sản Phẩm</h2>
            <br>
        </div>
    </div>
</div>
<form action="" method="post" id="form" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-6">
            <strong>Tên Sản Phẩm</strong>
            <input type="text" name="pr_title" class="form-control" placeholder="Tên Sản Phẩm">
        </div>
        <div class="col-lg-6">
            <strong>Mô Tả Sản Phẩm</strong>
            <input name="pr_description" type="text" class="form-control" placeholder="Mô Tả Sản Phẩm">
        </div>
        <div class="col-lg-6">
            <strong>Ảnh Sản Phẩm</strong>
			<input id="file" class="form-control" type="file" name="file" size="50" />
        </div>
        <div class="col-lg-6">
            <strong>Giá Tiền</strong>
            <input name="pr_price" type="text" class="form-control" placeholder="Giá Tiền">
        </div>
        <div class="col-lg-12">
            <br/>
            <button class="btn btn-success btn-add" type="button" id="save" value="Upload">Thêm</button>
            <a class="btn-danger btn" target="_blank" href="genproduct">Xuất FILE EXCEL</a>
        </div>
    </div>
</form>
<form action="importEX" style="display:flex;margin-top:15px" method="post" enctype="multipart/form-data" style="margin-top:15px">
    <span style="padding-right:15px">Upload excel file : </span>
    <input style="margin-right:15px" class="btn btn-default" type="file" name="uploadFile" value="" />
    <!-- <br> -->
    <input class="btn btn-warning" type="submit" name="submit" value="Upload" />
</form>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered" style="margin-top:20px">
                <thead>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>Mô Tả Sản Phẩm</th>
                        <th>Ảnh Sản Phẩm</th>
                        <th>Giá Tiền</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php foreach ($productList as $i_key => $sz_Product) {?>
                        <tr>
                            <td style="vertical-align: middle;"><?php echo $sz_Product->pr_title;?></td>
                            <td style="vertical-align: middle;"><?php echo $sz_Product->pr_description;?></td>
                            <td><img src="<?php echo base_url() ?>frontadmin/images/<?php echo $sz_Product->pr_img;?>" width="50" height="50" /></td>
                            <td style="vertical-align: middle;"><?php echo number_format($sz_Product->pr_price);?> đ</td>
                            <td style="vertical-align: middle; text-align:center;">
                                <a class="btn btn-success" href="edit_product/<?php echo $sz_Product->pr_id;?>"> <i style="color:#fff" class="glyphicon glyphicon-pencil"></i> </a>
                                <a class="btn btn-danger" href="del/<?php echo $sz_Product->pr_id; ?>"> <i style="color:#fff" class="glyphicon glyphicon-remove"></i> </a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
            <div class="text-center"><?php echo $pagination;?></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on("click",".btn-add",function(e){  
            e.preventDefault();
            var formData =$("#form").submit(function(e){
                return ;
            });
            var formData = new FormData(formData[0]);    
            $.ajax({
                url: '/add_product',
                type: 'POST',
                data: formData,
                error: function() {
                    console.log('Chưa thành công');
                },
                success: function(data) {
                    var obj = JSON.parse(data);
                    var html = '';
                    html += '<tr>';
                    html += '<td style="vertical-align: middle;">'+obj.pr_title+'</td>';
                    html += '<td style="vertical-align: middle;">'+obj.pr_description+'</td>';
                    html += '<td style="vertical-align: middle;"><img width="50" height="50" src="../frontadmin/images/'+obj.pr_img+'" alt=""></td>';
                    html += '<td style="vertical-align: middle;"> '+obj.pr_price+'</td>';
                    html += '<td style="vertical-align: middle; text-align:center;"> <a class="btn btn-success" href="edit_product/'+obj.pr_id+'"> <i style="color:#fff" class="glyphicon glyphicon-pencil"></i> </a> <a class="btn btn-danger" href="edit_product/'+obj.pr_id+'"> <i style="color:#fff" class="glyphicon glyphicon-remove"></i> </a></td>';
                    html += '</tr>';
                    $('tbody').prepend(html);
                    alert("Đã thêm thành công");  
                },
                contentType: false,
                processData: false,
                cache: false
            });
            return false;
        });
        
    });
</script>