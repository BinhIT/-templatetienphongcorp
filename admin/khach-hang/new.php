<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
                <div>
                    <label>MÃ KHÁCH HÀNG</label>
                    <input name="ma_kh">
                </div>
                <div>
                    <label>HỌ VÀ TÊN</label>
                    <input name="ho_ten">
                </div>
            </div>
            <div>
                <div>
                    <label>MẬT KHẨU</label>
                    <input name="mat_khau" type="password">
                </div>
                <div>
                    <label>XÁC NHẬN MẬT KHẨU</label>
                    <input name="mat_khau2" type="password">
                </div>
            </div>
            <div>
                <div>
                    <label>ĐỊA CHỈ EMAIL</label>
                    <input name="email">
                </div>
                <div>
                    <label>HÌNH ẢNH</label>
                    <input name="hinh" type="file">
                </div>
            </div>
            <div>
                <div>
                    <label>KÍCH HOẠT?</label>
                    <div>
                        <label><input name="kich_hoat" value="0" type="radio">Chưa kích hoạt</label>
                        <label><input name="kich_hoat" value="1" type="radio" checked>Kích hoạt</label>
                    </div>
                </div>
                <div>
                    <label>VAI TRÒ</label>
                    <div>
                        <label><input name="vai_tro" value="0" type="radio">Khách hàng</label>
                        <label><input name="vai_tro" value="1" type="radio" checked>Nhân viên</label>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <button name="btn_insert_kh">Thêm mới</button>
                    <button type="reset">Nhập lại</button>
                    <a href="index.php?btn_list_kh">Danh sách</a>
                </div>
            </div>
        </form>
    </body>
</html>