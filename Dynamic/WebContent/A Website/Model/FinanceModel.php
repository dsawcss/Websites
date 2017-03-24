<?php 

require ("Entities/WebsiteEntities.php");

//Contact database related code for the finance page
class FinanceModel
{
	//Get all stock names from database and return them in an array. 
	function GetFinanceName ()
	{
		require 'Credentials.php';
	
		//Open Connection and Select Database
		mysql_connect($host, $user, $password, $database) or die(mysql_error());
		mysql_select_db($database);
		$result = mysql_query("SELECT DISTINCT Name FROM Finance") or die(mysql_error());
		$Name = array();
		
		//Get data from database.
		while ($row = mysql_fetch_array($result))
		{
			array_push($Name, $row[0]);
		}
		
		//Close connection and return result
		mysql_close();
		return $Name;
	}
	
	//Get finance entity objects from the database and return them in an array
	function GetFinanceName ($Name)
	{
		require 'Credentials.php';
		
		//Open conection and Select database
		mysql_connect($host, $user, $password, $database) or die(mysql_error());
		mysql_select_db($database);
		
		$query = "SELELCT * FROM finance WHERE Name LIKE '$Name'";
		$financeArray = array ();
		
		//Get data from databse
		while ($row = mysql_fetch_array($result))
		{
			$Name = $row[1];
			$
			
		}
		
		//Create finance objects and store them in an arry
		$finance = new Fi
		array_push($finaceArray, $finance);
		
		//Close connection and return result
		mysql_close();
		returen $financeArray;
	}
}

?>