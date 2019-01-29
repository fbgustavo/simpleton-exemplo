<?php

class Posts {
	
	private $db;
	
	public function __construct() {
		$this->db = Database::getInstance();
	}
	
	public function getAllCategories() {
		$query = "SELECT * FROM categories";
		$getCat = $this->db->select($query);
		return $getCat;
	}
}