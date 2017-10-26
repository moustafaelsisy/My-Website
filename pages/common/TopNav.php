<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/includes/directories.php");

class TopNav{

  public function view(){
    echo '<div class="container" id="topBar">
      <div class="row">
        <div class="col-md-6 text-left">
          <a href="/"><img id="logo" src="/'.$GLOBALS['IMAGE_DIR'].'logo.png"></img></a>
        </div>
        <div class="col-md-6" id="tabs">
          <a href="https://github.com/moustafaelsisy" target="_blank"><span>Projects</span></a>
          <a href="/pages/education/education.php"><span>Education</span></a>
          <a href="/pages/distinctions/distinctions.php"><span>Distinctions</span></a>
          <a href="/assets/docs/Moustafa_Elsisy_Resume.pdf"><span>Resume</span></a>
        </div>
      </div>
    </div>';
  }
}
 ?>
