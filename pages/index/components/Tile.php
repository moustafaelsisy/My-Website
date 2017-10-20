<?php

class Tile {
  private static $initialId = 1;
  private static $count;
  private $id;
  private $title;
  private $body;
  private $btnText;
  private $faChar;

  public function __construct($title, $body, $btnText, $btnLink, $faChar)
  {
    $this->id = self::$initialId+self::$count;
    $this->title = $title;
    $this->body = $body;
    $this->btnText = $btnText;
    $this->btnLink = $btnLink;
    $this->faChar = $faChar; //FontAwesome icon

    self::$count += 1;
  }

  public function getId(){return $this->id;}
  public function getTitle(){return $this->title;}
  public function getBody(){return $this->body;}
  public function getBtnText(){return $this->btnText;}
  public function getFaChar(){return $this->faChar;}

  public static function setInitialId($id){
    if(!self::$count) self::$initialId = $id;
    else{
      throw new ErrorException("Can not set initial id for class `Tile` after
       it has been instantiated atleast once!");
    }
  }

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
