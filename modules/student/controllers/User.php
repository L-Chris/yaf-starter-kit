<?php
class UserController extends AbstractController {
  public $actions = array(
    "list" => "actions/user/ListAction.php",
    "get" => "actions/user/GetAction.php"
  );
}