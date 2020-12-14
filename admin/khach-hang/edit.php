<!DOCTYPE html>
<html>
    <body>
        <h3>QUẢN LÝ KHÁCH HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div>
                <label>MÃ KHÁCH HÀNG</label>
                <input name="ma_kh" value="<?=$ma_kh?>" readonly>
            </div>
            <div>
                <label>MẬT KHẨU</label>
                <input name="mat_khau" value="<?=$mat_khau?>" type="password">
            </div>
            <div>
                <label>HỌ VÀ TÊN</label>
                <input name="ho_ten" value="<?=$ho_ten?>">
            </div>
           
            <div>
                <label>ĐỊA CHỈ EMAIL</label>
                <input name="email" value="<?=$email?>">
            </div>
            <div>
                <label>HÌNH ẢNH</label>
                <input name="hinh" type="hidden" value="<?=$hinh?>">
                <input name="up_hinh" type="file"> (<?=$hinh?>)
            </div>
            <div>
                <label>KÍCH HOẠT?</label>
                <div>
                    <label>
                        <input <?=!$kich_hoat?'checked':''?> name="kich_hoat" value="0" type="radio">Chưa kích hoạt
                    </label>
                    <label>
                        <input <?=$kich_hoat?'checked':''?> name="kich_hoat" value="1" type="radio">Kích hoạt
                    </label>
                </div>
            </div>
            <div>
                <label>VAI TRÒ</label>
                <div>
                    <label>
                        <input <?=!$vai_tro?'checked':''?> name="vai_tro" value="0" type="radio">Khách hàng
                        </label>
                    <label>
                        <input <?=$vai_tro?'checked':''?> name="vai_tro" value="1" type="radio">Nhân viên
                    </label>
                </div>
            </div>
            <div>
                <div>
                    <button name="btn_update">Cập nhật</button>
                    <button type="reset">Nhập lại</button>
                    <a href="index.php">Thêm mới</a>
                    <a href="index.php?btn_list_kh">Danh sách</a>                
                </div>
            </div>
        </form>
    </body>
</html>