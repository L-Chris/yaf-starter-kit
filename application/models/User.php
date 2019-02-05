<?php
class UserModel {
  protected $_table = 'user';
  private $_model = array(
    'id',
    'name',
    'email'
  );

  public function __construct() {
    $this->_db = Yaf_Registry::get('_db');
  }

  public function find($params = array()) {
    $where_params = [
      'name[~]' => $params->name,
      'email[~]' => $params->email
    ];
    $result = $this->_db->select($this->_table, $this->_model, $where_params);
    return $result;
  }

  public function get($id) {
    $result = $this->_db->get($this->_table, $this->_model, [
      'id' => $id
    ]);
    return $result;
  }
}
?>