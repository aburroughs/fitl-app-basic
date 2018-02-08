<?php


$page = $_REQUEST['page'];


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

// Determine what page to show
if ($page == 'show'){
	// Retrieve id from URL
	$id = $_REQUEST['id'];
	show($id);

}
elseif ($page == 'create'){
	create();
}


    // Load the show page
function show($id){
	global $connection;

	// Set-up empty object array in case no object is found for id given
	$object = array(
		'name' => '',
		'cook_time' => '',
		'ingredients' => '',
		'instructions' =>'',
	 );


	// Query to select object
	// SELECT * FROM recipes WHERE id = 1
	$sql = 'SELECT * FROM Recipe WHERE id = ' .$id;

	// Execute the query 
	$result = $connection->query($sql);

	// Check for and retrieve the object
	if ($result->num_rows > 0){
		
		// Store objects information in $object then get information from array
		$object = $result->fetch_assoc();
		//echo '<pre>';
		//print_r($object);
		//echo '</pre>';
	}


	//Load view file
	include "recipe-show-view.php";
}


//Load the create page
function create(){
	include 'recipe-create-view.php';
}

?>