<div class="market-updates">
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-2">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-eye"> </i>
            </div>
                <div class="col-md-8 market-update-left">
                <h4>Sản phẩm</h4>
                <h3>
                    <?php
                        $num_rows=$this->db->count_all_results('bnc_product');
                        echo $num_rows;
                    ?>
                </h3>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-users" ></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Thành Viên</h4>
                <h3>
                <?php
                    $num_rows=$this->db->count_all_results('users');
                    echo $num_rows;
                ?>
                </h3>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-3">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-users" ></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Đơn Hàng</h4>
                <h3>
                <?php
                    $num_rows=$this->db->count_all_results('donhang');
                    echo $num_rows;
                ?>
                </h3>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>