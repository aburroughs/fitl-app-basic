<?php

// Retrieve id from URL
$id = $_REQUEST['id'];


// Set-up empty object array in case no object is found for id given
$object = array(
	'name' => '',
	'cook_time' => '',
	'ingredients' => '',
	'instructions' =>'',
 );


// Database connection credentials 
$servername ='localhost';
$username = 'homestead';
$password = 'secret';


// Create connection
$connection = new mysqli($servername, $username, $password);

// Check for an error
if ($connection->connect_error){
	echo 'Connection failed:' . $connection->connect_error;
	exit;
} 

// Otherwise connected successfully
//echo 'Connected successfully!';

// Connect to the "fitl" database
$connection->select_db('fitl');

// Query to select object
// SELECT * FROM recipes WHERE id = 1
$sql = 'SELECT * FROM Recipe WHERE id = ' .$id;

// Execute the query 
$result = $connection->query($sql);

// Check for and retrieve the object
if ($result->num_rows > 0){
	
	// Store objects information in $object
	$object = $result->fetch_assoc();
	//echo '<pre>';
	//print_r($object);
	//echo '</pre>';
}




?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['name']; ?></title>
	</head>
	


	<body>
		<h1><?php echo $object['name']; ?></h1>
		<p><?php echo $object['cook_time']; ?></p>
		<p><?php  echo $object['ingredients']; ?></p>
		<p><?php  echo $object['instructions']; ?></p>


	</body>
</html>