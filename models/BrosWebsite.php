<?php

class BrosWebsite {
	public $name;
	public $url;
	static $connection;

	public function __construct($attributes = []) {
		$this->load($attributes);
		self::$connection = pg_connect('host=127.0.0.1 port=5432 dbname=bros user=bros password=bros');
	}

	private function getTable(){
		return 'bros_website';
	}

	public function load(array $attributes = []){
		$this->name = isset($attributes['name']) ? $attributes['name'] : null;
		$this->url = isset($attributes['url']) ? $attributes['url'] : null;
	}

	public function validate(){
		return true;
	}

	public function save(){
		if(!$this->validate()){
			return false;
		}

		return $this->insert();
	}

	private function insert(){
		$query = $this->prepareQuery();
		if(pg_query(self::$connection, $query)){
			return true;
		} else {
			var_dump(pg_last_error());
			return false;
		}
	}

	private function prepareQuery(){
		$count = 1;
		$sql   = 'INSERT INTO '.$this->getTable().' (';
		$sql  .= $this->getAttributesNames().') VALUES (';

		foreach($this->getAttributes() as $attribute){
			$sql .= '\''.$attribute.'\'';
			if(count($this->getAttributes()) > $count++){
				$sql .= ', ';
			}
		}
		
		$sql .= ')';
		return $sql;
	}

	public function getAttributesNames(){
		return implode(',',array_keys($this->getAttributes()));
	}

	public function getAttributes(){
		return get_object_vars($this);
	}
}