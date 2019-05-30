<?php

require_once(dirname(__FILE__).'/include/constants.php');
require_once(CONTROLLERS.'/RequestController.php');

$request = new RequestController();
$request->handleRequest();