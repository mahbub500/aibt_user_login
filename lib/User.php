<?php 

include_once( 'Session.php' );
include( './database.php' );

/**
 * User Class
 */
class User {
	
	private $db;
	public $pdo;

	public function __construct(){
		// $this->db = new Database();
		// $this->dbConnection();
	}

	public function dbConnection (){
		$servername = "localhost";
		$username 	= "root";
		$password 	= "337338";
		
		try {
		  $conn = new PDO("mysql:host=$servername;dbname=abit.wp", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $this->$pdo = $conn;
		  echo "Connected successfully";
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	}

	public function userRegistration( $data ){

		$servername = "localhost";
		$username 	= "root";
		$password 	= "337338";
		
		try {
		  $conn = new PDO("mysql:host=$servername;dbname=abit.wp", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  // $this->$pdo = $conn;
		  echo "Connected successfully";
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}


		$name 		= $data['name'];
		$email 		= $data['email'];
		$status 	= $data['editor_status']; 
		$password 	= md5( $data['Password'] );

		if ( $name == '' || $email == '' || $status == '' || $password == '') {
			$msg = "<div class='alert alert-danger'>Field must Not Be Empty </div>";
			return $msg;
		}

		$sql 	= " SELECT * FROM 'user' " ;
		$stmt 	= $conn->prepare($sql);
    	$stmt->execute();

	    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	    
	    // // Process and display the data
	    // foreach ($rows as $row) {
	    //     echo "Column 1: " . $row['column1'] . "<br>";
	    //     echo "Column 2: " . $row['column2'] . "<br>";
	    //     echo "Column 3: " . $row['column3'] . "<br>";
	    //     echo "<br>";
	    // }

		return $rows;	

	

	}

	public function emailCheck( $email ){
		$sql = "SELECT 'email' FROM 'user' WHERE email = $email ";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			return true;
		}
		else{
			return false;
		}

	}
}
