<!DOCTYPE html>
<html>
    <body>
        <h3>QUÊN MẬT KHẨU</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="quen-mk.php" method="post">
            <div>
                <label>Tên đăng nhập</label>
                <input name="ma_kh">
            </div>
            <div>
                <label>Địa chỉ email</label>
                <input name="email">
            </div>
            <div>
                <button name="btn_forgot">Tìm lại mật khẩu</button>
            </div>
        </form>
    </body>
</html>
