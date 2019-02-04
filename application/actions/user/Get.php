<?php
class GetAction extends AbstractAction {
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