<?php 

require ("Entities/WebsiteEntities.php");

//Contact database related code for the finance page
class FinanceModel
{
	//Get ALL stock names from database and return them in an array. 
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
			array_push($Name, $row[0]); //Display Name Only For Dropdown List
		
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
		
		$query = "SELELCT * FROM Finance WHERE Name LIKE '$Name'";
		$FinanceArray = array ();
		
		//Get data from databse
		while ($row = mysql_fetch_array($result))
		{
			$Name = $row[1]; //Display All Data Columns in Rows
			$
			
		
		
		//Create finance objects and store them in an array
		$Finance = new FinacneEntity(-1, $Name, $row);
		array_push($FinaceArray, $Finance);
		
		//Close connection and return result
		mysql_close();
		return $FinanceArray;
		}
	}
}

?>