<?php
class UserController extends Yaf_Controller_Abstract {
  public $actions = array(
    "list" => "actions/user/ListAction.php",
    "get" => "actions/user/GetAction.php"
  );
}