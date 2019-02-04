<?php
class ListAction extends AbstractAction {
  public function init() {
    $this->user = new UserModel();
  }

  public function execute () {
    $this->init();
    $data = array();
    $data['status'] = 0;
    $data['data'] = $this->user->find();
    $this->getResponse()->setBody(json_encode($data));
  }
}
?>