<!DOCTYPE html>
<html>
    <body>
        <div>
        <?php
            foreach ($items as $item) {
                extract($item);
        ?>
            <div>
                <div>
                    <a href="chi-tiet.php?ma_hh=<?=$ma_hh?>">
                        <img src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>">
                    </a>
                    <div>
                        <h3>$<?=number_format($don_gia, 2)?></h3>
                        <p><?=$ten_hh?></p>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
    </body>
</html>
