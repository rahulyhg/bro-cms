<?php
require('controllers/DataBaseController.php');

$name =$_POST["name_of_site"];
$url = $_POST["url_of_site"];
$controller = new DataBaseController();
$controller->insertSite($name, $url);


?>
