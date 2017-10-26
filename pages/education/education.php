<?php
 require_once ($_SERVER['DOCUMENT_ROOT']."/includes/head.php");
 require_once ("contentText/blocks.php");
  require_once ($_SERVER['DOCUMENT_ROOT']."/pages/common/Blocks.php");
 require_once ("components/Header.php");
 require_once ($_SERVER['DOCUMENT_ROOT']."/pages/common/TopNav.php");
 require_once ($_SERVER['DOCUMENT_ROOT']."/pages/common/Footer.php");
 ?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Moustafa Elsisy</title>
    <?php
      echo $GLOBAL_HEAD;
      echo '
      <link rel="stylesheet" type="text/css" href="/'.getCSS(__FILE__).'">
      <script src="/'.getJS(__FILE__).'" type="text/javascript"></script>';
    ?>
  </head>
  <body>
    <?php
      echo (new TopNav())->view();
      echo (new Header())->view();
      echo (new Blocks($blocks))->view();
      echo (new Footer())->view();
     ?>
  </body>
</html>
