<?php
class BlockRow{

  private $leftBlock;
  private $rightBlock;

  public function __construct($leftBlock, $rightBlock = NULL){
    $this->leftBlock = $leftBlock;
    $this->rightBlock = $rightBlock;
  }


  public function view($breakpoint){
    return '
    <div class="row block-row">
      '.$this->leftBlock->view($this->rightBlock ? 6 : 12, $breakpoint)
       .($this->rightBlock ? $this->rightBlock->view(6, $breakpoint) : '').'
    </div>
    ';
  }
}

?>
