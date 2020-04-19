<?php
define('DB_SERVER','localhost');//we use the local machine
define('DB_USER','root');//user is root. Howerver you can create another user
define('DB_PASS','');//data has not been set
define('DB_NAME','btc3205');//Remember our database name

class DBConnector{
public $conn;
/*We connect to our database inside our class constructor
So we can always cause a database connection whenever an object is created.*/

function __construct(){
$this->conn=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
return $this->conn;
}
/*Once we are done with database reads, updates, deletes
This public function does exactly that.*/
public function closeDatabase(){
	mysqli_close($this->conn);
}
}
	?>