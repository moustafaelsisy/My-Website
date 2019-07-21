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
  * @param breakpoint Device size for the column to take up the whole row (one of: xs, sm, md, lg)
  */
  public function view($width, $breakpoint){
    return '
    <div class="col-'.$breakpoint.'-'.$width.' block">
      <div class="block-content">
        <h5>'.$this->title.'</h3>
        <p>'.$this->body.'</p>
      </div>
    </div>
    ';
  }
}

?>
