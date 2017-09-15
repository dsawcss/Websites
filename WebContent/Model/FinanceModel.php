<?php
require ("Entities/CoffeeEntity.php");

//Containes database related code for the Coffee page.
class CoffeeModel {
	
	///Get all coffee types from the database and return them in an array.
	function GetCoffeeTypes() {
		require ('Credentials.php');
		
		//Open connection and Select database.
		$conn = mysqli_connect($host,$user, $passwd, $database);
		if($conn->connect_error)	{
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT DISTINCT type FROM coffee";
		
		$result = $conn->query($sql);
		$types = array();
		
		//Get data from database.
		while ($row = mysqli_fetch_array($result))	{
			array_push ($types, $row[0]);
		}
		
		//Close connection and return result.
		$conn->close();
		return $types;
	}
	
	//Get coffeeEntity objects from the database and return them in an array.
	function GetCoffeeByType($type)	{
		require ('Credentials.php');
		//Open connection and Select database.
		$conn = mysqli_connect($host, $user, $passwd, $database);
		if($conn->connect_error)	{
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * FROM coffee WHERE type LIKE '$type'";
		
		$result = $conn->query($sql);
		$coffeeArray = array();
		
		//Get data from database
		while	($row = mysqli_fetch_array($result))	{
			$id = $row[0];
			$name = $row[1];
			$type = $row[2];
			$price = $row[3];
			$roast = $row[4];
			$country = $row[5];
			$image = $row[6];
			$review = $row[7];
			
			//Create coffee objects and store them in an array.
			$coffee = new CoffeeEntity($id, $name, $type, $price, $roast, $country, $image, $review);
			array_push($coffeeArray, $coffee);
		}
		//Close connection and return result
		$conn->close();
		return $coffeeArray;
	}
	
	function GetCoffeeById($id)	{
		require ('Credentials.php');
		//Open connection and Select database.
		$conn = mysqli_connect($host, $user, $passwd, $database);
		if($conn->connect_error)	{
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * FROM coffee WHERE id = $id";
		$result = $conn->query($sql);
		
		//Get data from database;
		while	($row = mysqli_fetch_array($result))	{
			$name = $row[1];
			$type = $row[2];
			$price = $row[3];
			$roast = $row[4];
			$country = $row[5];
			$image = $row[6];
			$review = $row[7];
			
			//Create coffee
			$coffee = new CoffeeEntity($id, $name, $type, $price, $roast, $country, $image, $review);
		}
		//Close connection and return result
		$conn->close();
		return $coffee;
	}

}
?>

