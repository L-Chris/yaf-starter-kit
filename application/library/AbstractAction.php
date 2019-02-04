<?php
class AbstractAction extends Yaf_Action_Abstract {
  public function run() {}
  public function execute () {
    $this->init();
    $this->run();
  }
}
?>