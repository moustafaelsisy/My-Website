<?php
require_once($_SERVER['DOCUMENT_ROOT']."/includes/directories.php");

class Header{
  function view(){
    return '
      <div id="section-1" class="section">
            <div class="container text-center">
              <div class="row">
                <div class="col-md-6 text-center" id="me" style="border-color: #1D9E85;">
                   <img src="'.$GLOBALS['IMAGE_DIR'].'me.jpg" alt="Moustafa Elsisy"></img>
                </div>
                <div class="col-md-6" id="welcome">
                  <h1 class="text-right">Hi, I am Moustafa Elsisy</h1>
                  <h6 class="text-right"></br>A Software and Web Developer in the making, currently studying in St. John\'s, Canada.</h6>
                </div>
              </div>
            </div>
      </div>
    ';
  }
}

?>
