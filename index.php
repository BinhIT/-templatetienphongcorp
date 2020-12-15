<?php
require './global.php';
if (exist_param("gioi-thieu")) {
    header("location:site/gioi-thieu.php ");
} else if (exist_param("lien-he")) {
    header("location:site/contact.html ");
} else if (exist_param("gop-y")) {
    header("location:site/contact.html ");
} else if (exist_param("hoi-dap")) {
    header("location:site/contact.html ");
} else {
    header("location:site/index.html ");
}

require '../layout.php';
