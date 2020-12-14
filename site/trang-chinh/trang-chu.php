<?php
    foreach ($items as $item) {
?>
    <div>
        <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$item['ma_hh']?>">
            <img src="<?=$CONTENT_URL?>/images/products/<?=$item['hinh']?>"/>
        </a>
    </div>                
<?php
    }
?>
