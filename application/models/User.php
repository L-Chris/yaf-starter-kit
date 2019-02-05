<?php
class UserModel {
  protected $_table = 'user';
  private $_model = array(
    'name',
    'email'
  );

  public function __construct() {
    $this->_db = Yaf_Registry::get('_db');
  }

  public function find($params = array()) {
    $where_params = [
      "name[~]" => $params->name
    ];
    $result = $this->_db->select($this->_table, $this->_model, $where_params);
    return $result;
  }
}
?>