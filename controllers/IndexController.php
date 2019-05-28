<?php

require(dirname(__FILE__).'/DataBaseController.php');

class IndexController {

    public $welcomeText = "Hello there!";
    public $connection; 

    public function __construct(){
    	$dbController = new DataBaseController();
        $this->connection = $dbController->connect();
    }

    public function index() {
		$this->getView('index', ['welcomeText' => $this->welcomeText]);
 	}

 	public function getView($viewName, $params = []){
 		extract($params);
 		require_once(dirname(__FILE__).'/../views/'.$viewName.'.php');
 	}
}
