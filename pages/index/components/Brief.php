<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/includes/directories.php");

class Brief{
  function view(){
    return '
      <div id="section-2" class="section">
        <h2 class="text-center">All what I have been up to recently is right here <img src="'.$GLOBALS['IMAGE_DIR'].'curv_arrow4.png"></img></h2>
      </div>
    ';
  }
}
 ?>
