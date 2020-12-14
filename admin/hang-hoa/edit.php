<!DOCTYPE html>
<html>
    <body>
        <h3>QUẢN LÝ HÀNG HÓA</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div>
                <div>
                    <label>MÃ HÀNG HÓA</label>
                    <input name="ma_hh" readonly value="<?=$ma_hh?>">
                </div>
                <div>
                    <label>TÊN HÀNG HÓA</label>
                    <input name="ten_hh" value="<?=$ten_hh?>">
                </div>
                <div>
                    <label>ĐƠN GIÁ</label>
                    <input name="don_gia" value="<?=$don_gia?>">
                </div>
            </div>
            <div>
                <div>
                    <label>GIẢM GIÁ</label>
                    <input name="giam_gia" value="<?=$giam_gia?>">
                </div>
                <div>
                    <label>HÌNH ẢNH</label>
                    <input name="up_hinh" type="file">
                    <input name="hinh" type="hidden" value="<?=$hinh?>"> (<?=$hinh?>)
                </div>
                <div>
                    <label>LOẠI HÀNG</label>
                    <select name="ma_loai">
                        <?php
                            foreach ($loai_select_list as $loai) {
                                if($loai['ma_loai'] == $ma_loai){
                                    echo '<option selected value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                                }
                                else{
                                    echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div>
                <div>
                    <label>HÀNG ĐẶC BIỆT?</label>
                    <div>
                        <label><input name="dac_biet" value="0" type="radio" <?=$dac_biet?'':'checked'?>>Đặc biệt</label>
                        <label><input name="dac_biet" value="1" type="radio"<?=$dac_biet?'checked':''?>>Bình thường</label>
                    </div>
                </div>
                <div>
                    <label>NGÀY NHẬP</label>
                    <input name="ngay_nhap" value="<?=$ngay_nhap?>">
                </div>
                <div>
                    <label>SỐ LƯỢC XEM</label>
                    <input name="so_luot_xem" readonly value="0" value="<?=$so_luot_xem?>">
                </div>
            </div>
            <div>
                <div>
                    <label>MÔ TẢ</label>
                    <textarea name="mo_ta" rows="4"><?=$mo_ta?></textarea>
                </div>
                <div>
                    <button name="btn_update">Cập nhật</button>
                    <button type="reset">Nhập lại</button>
                    <a href="index.php">Thêm mới</a>
                    <a href="index.php?btn_list">Danh sách</a>
                </div>
            </div>
        </form>
    </body>
</html>
