<?php
class ListAction extends Yaf_Action_Abstract {
  public function execute () {
    $this->getView()->render('user/index.html');
  }
}
?>