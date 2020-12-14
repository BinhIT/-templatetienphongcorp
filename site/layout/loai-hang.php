<!DOCTYPE html>
<html>
    <body>
        <div class="style">
            <div >DANH MỤC</div>
            <div>
                <?php
                    require '../../dao/loai.php';
                    $loai_array = loai_select_all();
                    foreach ($loai_array as $loai) {?>
                        <div>
                        <?php 
                            $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                            $name = $loai['ten_loai'];
                            echo "<a href='$href'>$name</a>";
                        ?>
                   
                        </div>
                        <?php } ?>  
              
            </div>
            <div>
                <form action="<?=$SITE_URL?>/hang-hoa/liet-ke.php">
                    <input name="keywords" placeholder="Từ khóa tìm kiếm">
                </form>                
            </div>            
        </div>
    </body>
</html>
