<?php
class Block{

  private $title;
  private $body;

  public function __construct($title, $body){
    $this->title = $title;
    $this->body = $body;
  }

  /*
  * @param width Width out of 12 for Bootstrap grid
  */
  public function view($width){
    return '
    <div class="col-xs-'.$width.' block">
      <h5>'.$this->title.'</h3>
      <p>'.$this->body.'</p>
    </div>
    ';
  }
}

?>
