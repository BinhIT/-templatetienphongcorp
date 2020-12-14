<?php
    require_once 'pdo.php';
    function binh_luan_delete($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
        $sql = "UPDATE khach_hang SET ma_kh=?, mat_khau=?, ho_ten=?, email=?, hinh=?, kich_hoat=?, vai_tro=?
        WHERE ma_kh=?";
        pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
    }
    function   binh_luan_dl($ma_kh){
        $sql = "DELETE FROM khach_hang  WHERE ma_kh=?";
        if(is_array($ma_kh)){
            foreach ($ma_kh as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $ma_kh);
        }
    }
    
    function bl_select_all(){
        $sql = "SELECT * FROM binh_luan";
        return pdo_query($sql);
    }
    function bl_select_by_id($ma_bl){
        $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
        return pdo_query_one($sql, $ma_bl);
    }
    function bl_exist($ma_loai){
        $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
        return pdo_query_value($sql, $ma_loai) > 0;
    }
    function binh_luan_select_by_hang_hoa($ma_hh){
        $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
        return pdo_query($sql, $ma_hh);
    
    }
    function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl){
        $sql = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung, ngay_bl) VALUES (?,?,?,?)";
    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl);
    }
    

?>