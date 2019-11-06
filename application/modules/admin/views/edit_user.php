<?php
    $this->uri->segment('n');
    $user_id = $this->uri->segment('2');
    $query = $this->db->get_Where('users', array('user_id' => $user_id) );
    $row = $query->row();
?>

<div class="row">
  <div class="col-lg-12">
    <strong>ID Thành Viên</strong>
    <input type="text" name="user_id" disabled value="<?php echo $row->user_id;?>" class="form-control" placeholder="Tên Sản Phẩm">
  </div>
  <div class="col-lg-12">
    <strong>Tên Thành Viên</strong>
    <input type="text" name="user_fullname" value="<?php echo $row->user_fullname;?>" class="form-control" placeholder="Tên Sản Phẩm">
  </div>
  <div class="col-lg-12">
    <strong>Email</strong>
    <input name="user_email" type="text" value="<?php echo $row->user_email;?>" class="form-control" placeholder="Mô Tả Sản Phẩm">
  </div>
  <div class="col-lg-12">
    <strong>Pass</strong>
    <input name="user_pass" type="text" value="<?php echo $row->user_pass;?>" class="form-control" placeholder="Giá Tiền">
  </div>
  <div class="col-lg-5">
    <strong>Cấp bậc</strong>
    <select class="form-control" name="user_level">
        <option <?php if($row->user_level == 1){echo 'selected';}?> value=1>Admin</option>
        <option <?php if($row->user_level == 2){echo 'selected';}?> value=2>Thành Viên</option>
        <option <?php if($row->user_level == 3){echo 'selected';}?> value=3>Cộng Tác Viên</option>
    </select>
  </div>
  
  <div class="col-lg-12">
    <br/>
    <a class="btn btn-success btn-add" href="about" type="submit"> Cập Nhật Thông Tin Thành Viên </a>
  </div>
</div>

<script type="text/javascript">
    $(".btn-add").click(function(){
        var user_id = $("input[name='user_id']").val();
        var user_fullname = $("input[name='user_fullname']").val();
        var user_email = $("input[name='user_email']").val();
        var user_pass = $("input[name='user_pass']").val();
        var user_level = $("select[name='user_level']").val();
        $.ajax({
           url: '/denuser',
           type: 'POST',
           data: {user_id: user_id, user_fullname: user_fullname, user_email: user_email, user_pass: user_pass, user_level: user_level}
        });
    });
</script>