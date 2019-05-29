<?php

require_once(dirname(__FILE__).'/include/constants.php');
require_once(CONTROLLERS.'/IndexController.php');

$indexController = new IndexController();
$indexController->index();