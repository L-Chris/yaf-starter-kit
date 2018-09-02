<?php
class UserController extends AbstractController {
  public $actions = array(
    "list" => "/modules/parent/actions/user/ListAction.php",
    "get" => "/modules/parent/actions/user/GetAction.php"
  );
}