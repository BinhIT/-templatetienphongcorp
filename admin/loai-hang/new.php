<?php
    require_once("../../dao/loai.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>QUẢN LÝ LOẠI HÀNG</h3>
        <?php
            if(isset($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <div>
                <label>Mã loại</label>
                <input name="ma_loai" value="auto number" readonly>
            </div>
            
            <div>
                <label>Tên loại</label>
                <input name="ten_loai">
            </div>
            <div>
                <button name="btn_insert">Thêm mới</button>
                <button type="reset">Nhập lại</button>
                <a href="index.php?btn_list">Danh sách</a>
            </div>
        </form>
</body>
</html>