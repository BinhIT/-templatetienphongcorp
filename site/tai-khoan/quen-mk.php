<?php
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

$VIEW_NAME="tai-khoan/quen-mk-form.php";

if(exist_param("btn_forgot")){
    $user = kh_select_by_id($ma_kh);
    if($user){
        if($user['email'] != $email){
            $MESSAGE = "Sai địa chỉ email!";
        }
        else{
            $MESSAGE = "Mật khẩu của bạn là: " . $user['mat_khau'];
            $VIEW_NAME="tai-khoan/dang-nhap-form.php";
            global $ma_kh, $mat_khau;
        }
    }
    else{
        $MESSAGE = "Sai tên đăng nhập!";
    }
}

require '../layout.php';
