<?php
    require_once("../../dao/loai.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../../content/js/xshop-list.js"></script>
</head>
<body>
<h3>QUẢN LÝ LOẠI HÀNG</h3>
        <?php
            if(isset($MESSAGE)){
                echo "<h5 >$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $items = loai_select_all();
                    foreach ($items as $item){
                    extract($item);
            ?>
                <tr>
                    <th><input type="checkbox" name="ma_loai[]" value="<?=$ma_loai?>"></th>
                    <td><?=$ma_loai?></td>
                    <td><?=$ten_loai?></td>
                    <td>
                        <a href="index.php?btn_edit&ma_loai=<?=$ma_loai?>" >Sửa</a>
                        <a href="index.php?btn_delete&ma_loai=<?=$ma_loai?>" >Xóa</a>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">
                        <button id="check-all" type="button">Chọn tất cả</button>
                        <button id="clear-all" type="button">Bỏ chọn tất cả</button>
                        <button id="btn-delete" name="btn_delete">Xóa các mục chọn</button>
                        <a href="./?btn_new">Nhập thêm</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</body>
</html>