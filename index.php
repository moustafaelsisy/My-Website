<?php
 require_once ("includes/head.php");
 require_once ("pages/index/contentText/tiles.php");
 require_once ($_SERVER['DOCUMENT_ROOT']."/pages/common/TopNav.php");
 require_once ($_SERVER['DOCUMENT_ROOT']."/pages/index/components/Header.php");
 require_once ($_SERVER['DOCUMENT_ROOT']."/pages/index/components/PreFooter.php");
 require_once ($_SERVER['DOCUMENT_ROOT']."/pages/common/Footer.php");

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Moustafa Elsisy</title>
    <?php
      echo $GLOBAL_HEAD;
      echo '
      <link rel="stylesheet" type="text/css" href="'.getCSS(__FILE__).'">
      <script src="'.getJS(__FILE__).'" type="text/javascript"></script>';
    ?>
  </head>
  <body>
    <?php
    echo (new TopNav())->view();
    echo (new Header())->view();
    ?>
    <div id="section-2" class="section">
      <?php echo'<h2 class="text-center">All what I have been up to recently is right here <img src="'.$IMAGE_DIR.'curv_arrow4.png"></img></h2>'?>
    </div>
    <?php
      //Generate the tiles
      foreach($tiles as $tile){
        echo $tile->view();
      }
      echo (new PreFooter())->view();
      echo (new Footer())->view();
    ?>
  </body>
</html>
