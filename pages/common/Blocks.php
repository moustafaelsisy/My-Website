<?php
require_once ("BlockRow.php");

class Blocks{
  private $blocks;

  public function __construct($blocks){
    $this->blocks = $blocks;
  }

  public function view(){
    $view = '<div class="container" style="width: 100%;">';
    $terminationCondition = sizeof($this->blocks)-(sizeof($this->blocks) % 2);
    for($i = 0; $i < $terminationCondition; $i += 2){
        $view .= (new BlockRow($this->blocks[$i], $this->blocks[$i+1]))->view();
    }
    if($terminationCondition !== sizeof($this->blocks)){ //1 more block to go
        $view .= (new BlockRow($this->blocks[$terminationCondition]))->view();
    }
    $view .= '</div>';

    return $view;
  }
}
 ?>
