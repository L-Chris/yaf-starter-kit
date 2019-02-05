<?php
class AbstractAction extends Yaf_Action_Abstract {
  public function init() {}
  public function run() {}
  public function execute () {
    $this->init();
    $this->run();
  }
}
?>