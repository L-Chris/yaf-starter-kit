<?php
class GetAction extends AbstractAction {
  public function run() {
    $id = $this->getRequest()->getQuery('id');
    $result = UserModel::where('id', $id)->first();
    Response::success($this->getResponse(), $result);
  }
}
?>