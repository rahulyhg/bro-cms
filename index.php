<?php

require_once(dirname(__FILE__).'/controllers/IndexController.php');

$indexController = new IndexController();
$indexController->index();