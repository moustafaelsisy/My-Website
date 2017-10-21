<?php
 require_once ("includes/head.php");
 require_once ("pages/index/contentText/tiles.php");
 require_once ($_SERVER['DOCUMENT_ROOT']."/pages/common/TopNav.php");
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
    ?>
    <div id="section-1" class="section">
          <div class="container text-center">
            <div class="row">
              <div class="col-md-6 text-center" id="me" style="border-color: #1D9E85;">
                <?php echo '<img src="'.$IMAGE_DIR.'me.jpg"></img>'; ?>
              </div>
              <div class="col-md-6" id="welcome">
                <h1 class="text-right">Hi, I am Moustafa Elsisy</h1>
                <h6 class="text-right"></br>A Software and Web Developer in the making, currently studying in St. John's, Canada.</h6>
              </div>
        </div>
      </div>
    </div>
    <div id="section-2" class="section">
      <?php echo'<h2 class="text-center">All what I have been up to recently is right here <img src="'.$IMAGE_DIR.'curv_arrow4.png"></img></h2>'?>
    </div>
    <?php
      //Generate the tiles
      foreach($tiles as $tile){
        echo $tile->view();
      }
    ?>
  </body>
</html>
