<?php
// require('controllers/DataBaseController.php');

// $name =$_POST["name_of_site"];
// $url = $_POST["url_of_site"];
// $controller = new DataBaseController();
// $controller->insertSite($name, $url);

require_once('models/BrosWebsite.php');

$bw = new BrosWebsite();
$bw->load($_POST['BrosWebsite']);

if($bw->save()) {
	echo 'succes';
} else {
	echo 'failed';
}

//$bw->save();




