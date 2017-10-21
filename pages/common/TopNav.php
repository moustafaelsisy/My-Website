<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/includes/directories.php");

class TopNav{

  public function view(){
    echo '<div class="container" id="topBar">
      <div class="row">
        <div class="col-md-8 text-left">
          <img id="logo" src="'.$GLOBALS['IMAGE_DIR'].'logo.png"></img>
        </div>
        <div class="col-md-4">
        </div>
      </div>
    </div>';
  }
}
 ?>
