<?php
class IndexAction extends AbstractAction {
  public function execute () {
    $this->getController()->assign('name', 'chris');
    $this->getController()->renderPage('index/index.html');
  }
}
?>