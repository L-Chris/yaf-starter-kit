<?php
class IndexAction extends Yaf_Action_Abstract {
  public function execute () {
    $this->getController()->renderPage('index/index.html');
  }
}
?>