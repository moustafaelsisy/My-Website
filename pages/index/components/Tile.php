<?php

class Tile {
  private $title;
  private $body;
  private $btnText;
  private $faChar;

  public function __construct($id, $title, $body, $btnText, $btnLink, $faChar)
  {
    $this->id = $id;
    $this->title = $title;
    $this->body = $body;
    $this->btnText = $btnText;
    $this->btnLink = $btnLink;
    $this->faChar = $faChar; //FontAwesome icon
  }

  public function getId(){return $this->id;}
  public function getTitle(){return $this->title;}
  public function getBody(){return $this->body;}
  public function getBtnText(){return $this->btnText;}
  public function getFaChar(){return $this->faChar;}
  public function generateHTML(){
    return '
            <div id="section-'.($this->id).'" class="section tile">
              <div class ="tile-upper">
                <h6>'.$this->title.'</h6>
                <p>'.$this->body.'</p>
                <a href="'.$this->btnLink.'">
                <div class="btn-round">'.$this->btnText.'</div>
                </a>
              </div>
              <div class="tile-lower">
                <i class="fa '.$this->faChar.'"></i>
              </div>
            </div>
            ';
  }
}
 ?>
