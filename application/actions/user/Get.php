<?php
class GetAction extends AbstractAction {
  public function run() {
    $data = array();
    $data['status'] = 0;
    $data['data'] = UserModel::find();
    $this->getResponse()->setBody(json_encode($data));
  }
}
?>