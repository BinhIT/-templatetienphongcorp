<!DOCTYPE html>
<html>
    <head>
    <title>Mê sách</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="<?=$CONTENT_URL?>/js/jquery.min.js?"> </script>
  <link rel="stylesheet" type="text/css" href="<?=$CONTENT_URL?>/css/style.css">
   <style>
 
   </style>
</head>
        <meta charset="UTF-8">
        <title>Mê sách</title>
        <l src="<?=$CONTENT_URL?>/js/jquery.min.js"></l>
    </head>
    <body>
   
        <div>
            <nav>
                <?php require 'layout/menu.php';?>            
            </nav>
            <div>
                
            </div>
            <div>
                <article>
                    <div>
                    <?php require $VIEW_NAME?>  
                    </div>
                </article>
                <aside>
                    <!--LOGIN-->
                    <?php require 'layout/dang-nhap.php';?>
                    <!--CATALOG-->
                    <?php require 'layout/loai-hang.php';?>
                    <!--FAVORITE-->
                    <?php require 'layout/top10.php';?>
                </aside>
            </div>
            <footer></footer>
        </div>
    </body>
</html>
