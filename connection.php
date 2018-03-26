
<?php
$servername = "sql2.njit.edu";
$username = "smv36";
$password = "NMZrAc4QP";
$dbname = "smv36";
$conn = null;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    
    }
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
	echo "<br>";
	http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
}
// Runs SQL query and returns results (if valid)
function runQuery($stmt) {
	global $conn;
    try {
		$q = $conn->prepare($stmt);
		$q->execute();
		$results = $q->fetchAll();
		$q->closeCursor();
		return $results;	
	} catch (PDOException $e) {
		http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
	}	  
}
function http_error($message) 
{
	header("Content-type: text/plain");
	die($message);
}


?>
