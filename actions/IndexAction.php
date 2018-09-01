<?php
class IndexAction extends Yaf_Action_Abstract {
  public function execute () {
    $this->getView()->render('/index/index.html');
  }
}
?>