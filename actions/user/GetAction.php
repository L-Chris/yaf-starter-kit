<?php
class GetAction extends Yaf_Action_Abstract {
  public function execute () {
    $this->getView()->display('user/index.html');
  }
}
?>