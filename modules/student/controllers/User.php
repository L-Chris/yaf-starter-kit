<?php
class UserController extends AbstractController {
  public $actions = array(
    "list" => "/modules/student/actions/user/ListAction.php",
    "get" => "/modules/student/actions/user/GetAction.php"
  );
}