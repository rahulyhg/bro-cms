<?php

require(CONTROLLERS.'/DataBaseController.php');

class IndexController {

    public $welcomeText = "Hello there!";
    public $result; 

    public function __construct(){
    	$dbController = new DataBaseController();
		$this->result = $dbController->getSites();
		if(is_null($this->result) || !$this->result){
			return;
		}

		foreach($this->result as $result) {
			//echo "<div><label>$result[name]</label>&nbsp; <span>$result[url]</span></div>";
		}
    }

    public function index() {
		$this->getView('index', ['welcomeText' => $this->welcomeText]);
 	}

 	public function getView($viewName, $params = []){
 		extract($params);
 		require_once(VIEWS.'/'.$viewName.'.php');
 	}
}
