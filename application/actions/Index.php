<?php
class IndexAction extends AbstractAction {
  public function run () {
    $this->getController()->assign('name', 'chris');
    $this->getController()->renderPage('index/index.html');
  }
}
?>