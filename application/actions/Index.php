<?php
class IndexAction extends AbstractAction {
  public function execute () {
    $db = Yaf_Registry::get('_db');
    $db->insert('account', [
      'name' => 'foo',
      'email' => 'foo@bar.com'
    ]);
    $this->getController()->assign('name', 'chris');
    $this->getController()->renderPage('index/index.html');
  }
}
?>