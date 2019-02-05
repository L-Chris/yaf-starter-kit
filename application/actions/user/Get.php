<?php
class GetAction extends AbstractAction {
  public function init () {
    $this->$user_model = new UserModel();
  }

  public function run() {
    $id = $this->getRequest()->getQuery('id');
    Response::success($this->getResponse(), $this->$user_model->get($id));
  }
}
?>