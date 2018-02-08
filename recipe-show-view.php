<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['name']; ?></title>
	</head>
	


	<body>
		<h1><?php echo $object['name']; ?></h1>
		<p>Cook Time:&nbsp<?php  echo $object['cook_time']; ?></p>
		<p>Ingredients:&nbsp<br><?php  echo $object['ingredients']; ?></p>
		<p>Cooking Instructions:&nbsp<br><?php  echo $object['instructions']; ?></p>


	</body>
</html>