<?php
require "../../global.php";
include_once('../../dao/pdo.php');
extract($_REQUEST);
if(exist_param("btn_insert")){
    try{
        $sql = "INSERT INTO loai(ten_loai) VALUES(?)";
        pdo_execute($sql, $ten_loai);
        unset($ten_loai, $ma_loai);
        $MESSAGE = "Thêm mới thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "loai-hang/new.php";
}
else
if(exist_param("btn_update")){
    try {
        $sql = "UPDATE loai SET ten_loai=? WHERE ma_loai=?";
        pdo_execute($sql, $ten_loai, $ma_loai);
        $MESSAGE = "Cập nhật thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "loai-hang/edit.php";
}
else if(exist_param("btn_delete")){
    try {
        $sql = "DELETE FROM loai WHERE ma_loai=?";
        if(is_array($ma_loai)){
            foreach ($ma_loai as $ma) {
                pdo_execute($sql, $ma);
            }
        }else{
            pdo_execute($sql, $ma_loai);
        } 
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "loai-hang/list.php";
}
else if(exist_param("btn_edit")){
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    $item = pdo_query_one($sql, $ma_loai);
    extract($item);
    $VIEW_NAME = "loai-hang/edit.php";
}
else if(exist_param("btn_list")){
    $VIEW_NAME = "loai-hang/list.php";
}
else{
    $VIEW_NAME = "loai-hang/new.php";
}
require "../layout.php";