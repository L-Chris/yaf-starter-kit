<?php
class ListAction extends Yaf_Action_Abstract {
  public function execute () {
    // $this->getView()->render('user/index.html');
    Yaf_Dispatcher::getInstance()->disableView();
    echo "method: ", __METHOD__, "<br/>";
    echo "params: ";
    print_r($this->getRequest()->getParams());
  }
}
?>