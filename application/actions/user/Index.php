<?php
class IndexAction extends AbstractAction {
  public function run() {
    $result = array(
      'page'=>'/user/index'
    );
    Response::success($this->getResponse(), $result);
  }
}
?>