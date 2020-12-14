<?php

include_once('../../dao/pdo.php');

require '../../global.php';

if(exist_param("loaihang")){
    $VIEW_NAME = "loai-hang/index.php";
}
else if(exist_param("khachhang")){
    $VIEW_NAME = "$ADMIN_URL/khach-hang";
}
else if(exist_param("gop-y")){
    $VIEW_NAME = "trang-chinh/gop-y.php";
}
else if(exist_param("hoi-dap")){
    $VIEW_NAME = "trang-chinh/hoi-dap.php";
}
else{
    $VIEW_NAME = "home.php";
}

require '../layout.php';
