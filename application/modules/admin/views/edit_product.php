<?php
    $this->uri->segment('n');
    $pr_id = $this->uri->segment('2');
    $query = $this->db->get_Where('bnc_product', array('pr_id' => $pr_id) );
    $row = $query->row();
?>

<div class="row">
<form action="" method="post" id="form" enctype="multipart/form-data">
  <div class="col-lg-12">
      <!-- <strong>ID Sản Phẩm</strong> -->
      <input style="display:none;" type="text" name="pr_id" value="<?php echo $row->pr_id;?>" class="form-control" placeholder="Tên Sản Phẩm">
    </div>
    <div class="col-lg-12">
      <strong>Tên Sản Phẩm</strong>
      <input type="text" name="pr_title" value="<?php echo $row->pr_title;?>" class="form-control" placeholder="Tên Sản Phẩm">
    </div>
    <div class="col-lg-12">
      <strong>Mô Tả Sản Phẩm</strong>
      <input name="pr_description" type="text" value="<?php echo $row->pr_description;?>" class="form-control" placeholder="Mô Tả Sản Phẩm">
    </div>
    <div class="col-lg-12">
      <strong>Giá Tiền</strong>
      <input name="pr_price" type="text" value="<?php echo $row->pr_price;?>" class="form-control" placeholder="Giá Tiền">
    </div>
    <div class="col-lg-5" style="margin-top:15px">
      <strong>Ảnh Sản Phẩm</strong>
      <input style="display:none" name="pr_img" value="<?php echo $row->pr_img?>" />
      <img style="width:100%;height:250px;padding:15px 0" src="<?php echo base_url("frontadmin/images/"). $row->pr_img?>" alt="">
      <input id="file" class="form-control" type="file" name="file" size="50" placeholder="Cập Nhật Ảnh Sản Phẩm">
    </div>
    
    <div class="col-lg-12">
      <br/>
      <a class="btn btn-success btn-add" href="product" type="submit">Cập Nhật Sản Phẩm</a>
    </div>
  </div>
</form>

<script type="text/javascript">
  $(document).ready(function(){
    $(document).on("click",".btn-add",function(e){  
        var formData =$("#form").submit(function(e){
            return ;
        });
        var formData = new FormData(formData[0]);    
        $.ajax({
            url: '/densanpham',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            cache: false
        });
        return false;
    });
  });
</script>