<?php
class ListAction extends AbstractAction {
  public function run() {
    $result = UserModel::get();
    Response::success($this->getResponse(), $result);
  }
}
?>