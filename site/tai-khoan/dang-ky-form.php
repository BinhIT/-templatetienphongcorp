<!DOCTYPE html>
<html>
    <body>
        <h3>ĐĂNG KÝ THÀNH VIÊN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="dang-ky.php" method="post" enctype="multipart/form-data">
            <div>
                <label>Tên đăng nhập</label>
                <input name="ma_kh" >
            </div>
            <div>
                <label>Mật khẩu</label>
                <input name="mat_khau" type="password" >
            </div>
            <div>
                <label>Xác nhận mật khẩu</label>
                <input name="mat_khau2" type="password" >
            </div>
            <div>
                <label>Họ và tên</label>
                <input name="ho_ten" >
            </div>
            <div>
                <label>Địa chỉ email</label>
                <input name="email" >
            </div>
            <div>
                <label>Hình</label>
                <input name="up_hinh" type="file">
            </div>
            <div>
                <button name="btn_register">Đăng ký</button>
            </div>
            <!--Giá trị mặc định-->
            <input name="vai_tro" value="0" type="hidden">
            <input name="kich_hoat" value="0" type="hidden">
        </form>
    </body>
</html>
