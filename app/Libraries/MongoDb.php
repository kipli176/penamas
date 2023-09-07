<?php
 
namespace App\Libraries;

//use MongoDB\Driver\Manager;

/**
* Author: https://roytuts.com
*/
 
class MongoDB {
             
	private $conn;

	function __construct() { 

		try { 
				$this->conn = new \MongoDB\Driver\Manager('mongodb+srv://kipli:rahasia1@singapur.lk6gx.mongodb.net/?retryWrites=true&w=majority'); 
		} catch(MongoDB\Driver\Exception\MongoConnectionException $ex) {
			show_error('Couldn\'t connect to mongodb: ' . $ex->getMessage(), 500);
		}
	}

	function getConn() {
		return $this->conn;
	}
             
}