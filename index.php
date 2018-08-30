<?php

define('APP_PATH', realpath(dirname(__DIR__)));

$app = new Yaf_Application(APP_PATH . "/conf/application.ini");

$app->run();