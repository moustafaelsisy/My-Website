<?php
  header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");

 require_once ("includes/head.php");
 require_once ("pages/index/contentText/tiles.php");
 require_once ($_SERVER['DOCUMENT_ROOT']."/pages/common/TopNav.php");
 require_once ($_SERVER['DOCUMENT_ROOT']."/pages/index/components/Header.php");
 require_once ($_SERVER['DOCUMENT_ROOT']."/pages/index/components/Brief.php");
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
    echo (new Brief())->view();
      //Generate the tiles
      foreach($tiles as $tile){
        echo $tile->view();
      }
      echo (new PreFooter())->view();
      echo (new Footer())->view();
    ?>
  </body>
</html>
