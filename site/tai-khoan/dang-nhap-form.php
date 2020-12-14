<!DOCTYPE html>
<html>
    <body>
        <h3>ĐĂNG NHẬP</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="dang-nhap.php" method="post">
            <div>
                <label>Tên đăng nhập</label>
                <input name="ma_kh" >
            </div>
            <div>
                <label>Mật khẩu</label>
                <input name="mat_khau" type="password" >
            </div>
            <div>
                <label>
                    <input name="ghi_nho" type="checkbox" checked>
                    Ghi nhớ tài khoản?
                </label>
            </div>
            <div>
                <button name="btn_login">Submit</button>
            </div>
        </form>
    </body>
</html>
