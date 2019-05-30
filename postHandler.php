<?php

require_once('models/BrosWebsite.php');

$bw = new BrosWebsite();
$bw->load($_POST['BrosWebsite']);

if($bw->save()) {
	echo 'succes';
} else {
	echo 'failed';
}