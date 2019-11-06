<!-- <div class="container"> -->
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Thêm Thành Viên</h2>
            <br>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <strong>Tên Thành Viên</strong>
    <input type="text" name="user_fullname" required class="form-control" placeholder="Tên Của Bạn">
  </div>
  <div class="col-lg-6">
    <strong>Email</strong>
    <input name="user_email" type="email" required class="form-control" placeholder="Email"></textarea>
  </div>
  <div class="col-lg-6">
    <strong>Pass</strong>
    <input name="user_pass" type="password" required class="form-control" placeholder="PassWord"></textarea>
  </div>
  <div class="col-lg-6">
    <strong>Cấp bậc</strong>
    <select class="form-control" name="user_level">
        <option value=1>Admin</option>
        <option value=2>Thành Viên</option>
        <option value=3>Cộng Tác Viên</option>
    </select>
  </div>
  <div class="col-lg-12">
    <br/>
    <a class="btn btn-success btn-add" type="submit">Thêm</a>
    <a class="btn btn-warning btn-export" href="exportEX" type="submit">Xuất FILE EXCEL</a>
  </div>
</div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered" style="margin-top:20px">
                <thead>
                    <tr>
                        <th>Tên Thành Viên</th>
                        <th>Email</th>
                        <th>Cấp bậc</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <!-- indes -->
                    <?php foreach ($bookList as $i_key => $sz_User) { ?>
                        <tr>
                            <td><?php echo $sz_User->user_fullname;?></td>
                            <td><?php echo $sz_User->user_email;?></td>
                            <td>
                                <?php 
                                    if(($sz_User->user_level) == 1 ) {
                                        echo 'Admin';
                                    }
                                    else if ( ($sz_User->user_level) == 2) {
                                        echo 'Thành Viên';
                                    }
                                    else {
                                        echo 'Cộng Tác Viên';
                                    }
                                ?>
                            </td>
                            <td style="vertical-align: middle; text-align:center;">
                                <a class="btn btn-success" href="edit_user/<?php echo $sz_User->user_id;?>"> <i style="color:#fff" class="glyphicon glyphicon-pencil"></i> </a>
                                <a class="btn btn-danger" href="del_user/<?php echo $sz_User->user_id; ?>"> <i style="color:#fff" class="glyphicon glyphicon-remove"></i> </a>
                            </td>
                        </tr>
                    <?php }?>
                    <!-- End Index -->
                </tbody>
            </table>
            <div align="center">
                <span colspan="4" class="">
                    <?php echo $pagination;?>
                </span>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".btn-add").click(function(){
        var user_fullname = $("input[name='user_fullname']").val();
        var user_email = $("input[name='user_email']").val();
        var user_pass = $("input[name='user_pass']").val();
        var user_level = $("select[name='user_level']").val();
        $.ajax({
            url: '/add_user',
            type: 'POST',
            dataType : 'json',
            data: {user_fullname: user_fullname, user_email: user_email, user_pass: user_pass, user_level: user_level},
            error: function() {
                alert('Chưa thành công');
            },
            success: function(data) {
                var html = '';
                html += '<tr>';
                html += '<td style="vertical-align: middle;">'+data.user_fullname+'</td>';
                html += '<td style="vertical-align: middle;">'+data.user_email+'</td>';
                html += '<td style="vertical-align: middle;"> '+data.user_level+'</td>';
                html += '<td style="vertical-align: middle;"> <a class="btn btn-success" href="edit_user/'+data.user_id+'"> <i style="color:#fff" class="glyphicon glyphicon-pencil"></i> </a> <a class="btn btn-danger" href="del_user/'+data.user_id+'"> <i style="color:#fff" class="glyphicon glyphicon-remove"></i> </a></td>';
                html += '</tr>';
                $('tbody').append(html);
                alert("Đã thêm thành công");  
            }
        });
    });
</script>