<?php
class UserController extends AbstractController {
  public $actions = array(
    'index' => 'actions/user/Index.php',
    'list' => 'actions/user/List.php',
    'get' => 'actions/user/Get.php'
  );
}