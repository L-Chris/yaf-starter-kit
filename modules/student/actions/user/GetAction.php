<?php
class GetAction extends Yaf_Action_Abstract {
  public function execute () {
    $this->getController()->renderPage('user/index.html');
  }
}
?>