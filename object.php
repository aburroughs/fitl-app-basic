<?php
$id = $_REQUEST['id'];

$object = array(
	'title' => '',
	'description' => '',
	'ingredients' => '',
	'instructions' =>'',
 );


// set the object variables 
//based on the id value from the URL
if ($id ==1){
	$object = array(
		'title' => 'Recipe #1',
		'description' => 'Zavioli with Spinach and Ricotta',
		'ingredients' => '1 1/4 cups ricotta cheese
					1 cup chopped spinach
					1 extra large zucchini',
		'instructions' => 'Preheat oven to 350 degrees F (175 degrees C)
					Mix ricotta cheese, spinach, egg, and pepper together in a bowl',
	);
}
	

elseif ($id ==2){
  $object = array(
  		'title' => 'Recipe #2',
  		'description' => 'Guacamole',
  		'ingredients' => '3 avocados - peeled, pitted, and mashed 
					      1 lime, juiced  3 tablespoons chopped fresh cilantro',
		'instructions' => 'In a medium bowl, mash together the avocados, 
		                   lime juice, and salt. Mix in onion, cilantro, tomatoes, 
		                   and garlic. Stir in cayenne pepper. Refrigerate 1 hour 
		                   for best flavor, or serve immediately',



  );
	
}


?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['title']; ?></title>
	</head>
	


	<body>
		<h1><?php echo $object['description']; ?></h1>
		<p><?php  echo $object['ingredients']; ?></p>
		<p><?php  echo $object['instructions']; ?></p>


	</body>
</html>