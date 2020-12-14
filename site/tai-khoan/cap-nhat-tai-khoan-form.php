<!DOCTYPE html>
<html>
    <body>
        <h3>CẬP NHẬT TÀI KHOẢN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
            <div>
                <div>
                    <img src="<?=$CONTENT_URL?>/images/users/<?=$hinh?>" style="max-width: 150px">
                </div>
                <div>
                    <div>
                        <label>Tên đăng nhập</label>
                        <input name="ma_kh" value="<?=$ma_kh?>" readonly>
                    </div>
                    <div>
                        <label>Họ và tên</label>
                        <input name="ho_ten" value="<?=$ho_ten?>">
                    </div>
                    <div>
                        <label>Địa chỉ email</label>
                        <input name="email" value="<?=$email?>">
                    </div>
                    <div>
                        <label>Hình</label>
                        <input name="up_hinh" type="file">
                    </div>
                    <div>
                        <button name="btn_update">Cập nhật</button>
                    </div>
                    <!--Giá trị mặc định-->
                    <input name="vai_tro" value="<?=$vai_tro?>" type="hidden">
                    <input name="kich_hoat" value="<?=$kich_hoat?>" type="hidden">
                    <input name="mat_khau" value="<?=$mat_khau?>" type="hidden">
                    <input name="hinh" value="<?=$hinh?>" type="hidden">
                </div>
            </div>
        </form>
    </body>
</html>
