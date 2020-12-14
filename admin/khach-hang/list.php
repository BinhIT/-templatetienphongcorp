<?php
    include_once('../../dao/pdo.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
        <script src="../../content/js/xshop-list.js"></script>
    </head>
    <body>
        <h3>QUẢN LÝ KHÁCH HÀNG</h3>
        <?php
            if(isset($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Mã khách hàng</th>
                    <th>Mật khẩu đăng nhập</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Hình ảnh</th>
                    <th>Kích hoạt</th>
                    <th>Vai trò</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </thead>
                <tbody>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM khach_hang";
                        $kh_array = pdo_query($sql);
                        foreach ($kh_array as $item){
                            extract($item);
                    ?>
                    <tr>
                    <th>
                        <input type="checkbox" name="ma_kh[]" value="<?=$ma_kh?>"></th>
                        <td><?=$mat_khau?></td>
                        <td><?=$ho_ten?></td>
                        <td><?=$email?></td>
                        <td><?=$hinh?></td>
                        <td><?=$kich_hoat?></td>
                        <td><?=$vai_tro?'Nhân viên':'Khách hàng'?></td>
                        <td><a href="index.php?btn_edit&ma_kh=<?=$ma_kh?>">Sửa</a></td>
                        <td><a href="index.php?btn_delete&ma_kh=<?=$ma_kh?>">Xóa</a></td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <button id="check-all" type="button">Chọn tất cả</button>
                            <button id="clear-all" type="button">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete">Xóa các mục chọn</button>
                            <a href="index.php">Nhập thêm</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </body>
</html>