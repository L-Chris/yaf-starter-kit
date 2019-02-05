<?php
class GetAction extends AbstractAction {
  public function init () {
    $this->$user_model = new UserModel();
  }

  public function run() {
    Response::success($this->getResponse(), $this->$user_model->find());
  }
}
?>