<?php
 require_once ($_SERVER['DOCUMENT_ROOT']."/includes/head.php");
 require_once ("contentText/blocks.php");
 require_once ("components/BlockRow.php");
 require_once ("components/Header.php");
 require_once ($_SERVER['DOCUMENT_ROOT']."/pages/common/TopNav.php");
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
    ?>
    <div class="container" style="width: 100%;">
      <?php

        $terminationCondition = sizeof($blocks)-(sizeof($blocks) % 2);
        for($i = 0; $i < $terminationCondition; $i += 2){
          echo (new BlockRow($blocks[$i], $blocks[$i+1]))->view();
        }
        if($terminationCondition !== sizeof($blocks)){ //1 more block to go
          echo (new BlockRow($blocks[$terminationCondition]))->view();
        }

      ?>
    </div>
  </body>
</html>
