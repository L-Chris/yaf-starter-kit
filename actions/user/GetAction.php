<?php
class GetAction extends Yaf_Action_Abstract {
  public function execute () {
    $data = array();
    $data['status'] = 1;
    $data['module'] = $this->getRequest()->getModuleName();
    $data['controller'] = $this->getRequest()->getControllerName();
    $data['action'] = $this->getRequest()->getActionName();
    $this->getResponse()->setBody(json_encode($data));
  }
}
?>