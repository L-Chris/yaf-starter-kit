<?php
class UserModel {
  protected $_table = 'user';
  private $params = array(
    'name',
    'email'
  );

  public function __construct() {
    $this->_db = Yaf_Registry::get('_db');
  }

  public function find() {
    $result = $this->_db->select($this->_table, $this->params);
    return $result;
  }
}
?>