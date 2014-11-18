<?php
// oop = (o)bject (o)riented (p)rograming
//Classes are used to make objects
//when we write functions we have to call every single thing
//when we write classes we can store multiple variables to replace all the functions we called
class Database {
	private $connection;
	//the "private" command means we can only see these things in this file
	private $host;
	private $username;
	private $password;
	private $database;
	//variables can be accessed thru this class
	//__construct defines our constructors.
	//Its called on an object after it has been created
	public function __construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
	//opens connection to the public
	public function openConnection() {
		this->connection = new mysqli(this->host, this->username, this->password, this->connection);
	
		if($this->connection->connect_error) {
			die("Error: " . $this->connection->connect_error); //tells program to die off
		}
	

	}
	//close connection
	public function closeConnection() {

	}
	//adds data to a database
	public function query($string) {

	}
}

?>