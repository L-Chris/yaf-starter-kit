<?php
class UserController extends AbstractController {
  public $actions = array(
    "list" => "actions/user/List.php",
    "get" => "actions/user/Get.php"
  );
}