<?php
class BlockRow{

  private $leftBlock;
  private $rightBlock;

  public function __construct(leftBlock, rightBlock = NULL){
    $this->leftBlock = leftBlock;
    $this->rightBlock = rightBlock;
  }


  public function view(){
    return '
    <div class="row blockRow">
      '.$this->leftBlock->view($this->rightBlock ? 6 : 12)
       .($this->rightBlock ? $this->rightBlock->view(6) : '').'
    </div>
    '
  }
}

?>
