<?php
//INCLUDES
 include ("includes/head.php");
 include ("includes/template.php");
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Moustafa Elsisy</title>
    <?php
      echo $GLOBAL_HEAD; //Found in 'includes/head.php'
      echo '
      <link rel="stylesheet" type="text/css" href="'.getCSS(__FILE__).'">
      <script src="'.getJS(__FILE__).'" type="text/javascript"></script>';
    ?>
  </head>
  <body>
    <?php
    echo $GLOBAL_NAV;
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
    <div id="section-3" class="section tile">
        <div class ="tile-upper">
            <h6>Projects</h6>
            <p>I have had a few enlightening experiences in a variety of fields,
              ranging from desktop gamemode scripting to web development. Some of
              the projects I have made are closed source, but a preview of these
              programs is available over at my projects webpage, along with other
              open source projects and their GitHub repositories :)
            </p>
            <div class="btn-round">
              See Projects
            </div>
          </div>
          <div class="tile-lower">
              <i class=" fa fa-code"></i>
          </div>
    </div>
    <div id="section-4" class="section tile">
        <div class ="tile-upper">
            <h6>Education</h6>
            <p>I have had a few enlightening experiences in a variety of fields,
              ranging from desktop gamemode scripting to web development. Some of
              the projects I have made are closed source, but a preview of these
              programs is available over at my projects webpage, along with other
              open source projects and their GitHub repositories :)
            </p>
            <div class="btn-round">
              See Education
            </div>
          </div>
          <div class="tile-lower">
              <i class=" fa fa-graduation-cap"></i>
          </div>
    </div>
  </body>
</html>
