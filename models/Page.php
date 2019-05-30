<?php

class Page {
	public $ID;
	public $title;
	public $content;

	public function __contstruct(){}

	public function load($values){
		$this->ID = $values['ID'];
		$this->title = $values['title'];
		$this->content = $values['content'];
	}

	public function show(){
		var_dump('test');
		extract(get_object_vars($this));
		require_once(VIEWS.'/header.php');
		require_once(VIEWS.'/content.php');
		require_once(VIEWS.'/footer.php');
	}
}