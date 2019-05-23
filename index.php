<?php

require_once(dirname(__FILE__).'/controllers/IndexController.php');

class Index {
    public function show(){
        echo 'Hello World';
        $indexController = new IndexController();
        $indexController->index();
    }
}

$index = new Index();
$index->show();

echo 'test';
echo 'test';