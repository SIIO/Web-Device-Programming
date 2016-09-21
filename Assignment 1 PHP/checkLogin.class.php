<?php

/**
******************************************************************************************
*Author: Shane Walsh
*Assignment: WE4.1 PHP Web App Assignment, Digital Skills Academy      
*Student ID: D15128603
*Date: 2016/05/20
*REF://http://stackoverflow.com/questions/2440506/how-to-check-if-an-array-value-exists 
*REF://http://www.w3schools.com/php/php_arrays.asp
******************************************************************************************/

include ("outputStatus.class.php");			//include outputStatus class file 

class CheckLogin							//This class contins mentohds that will check usernames and passwords 
{
	
	public function checkDetails($detailsArray)		//Method to check usernames and passwords
	{
		
		$username = $detailsArray[0];		//extracting username & password from $detailsArray
		$password = $detailsArray[1];				

		//Associative array with hardcoded usernames and corresponding passwords
		$hardcodedDetails = array("Shane"=>"Saturn", "Daniel"=>"Pluto", "Aoife"=>"Mercury", "Isabelle"=>"Venus");


		//Check if username is in the array && check if password associated with the username is correct
		//REF: http://stackoverflow.com/questions/2440506/how-to-check-if-an-array-value-exists 
		//REF: http://www.w3schools.com/php/php_arrays.asp

		if(isset($hardcodedDetails[$username]) && $hardcodedDetails[$username] == $password) 
		{

    			$OutputMsg = new OutPut($detailsArray);					//Creating a new object for OutPut class
				$OutputMsg->outputSuccess($detailsArray);				//Calling the outputSuccess method in Output class
		}
		else
		{
				$OutputMsg = new OutPut($detailsArray);					//Creating a new object for OutPut class
				$OutputMsg->outputFailure($detailsArray);				//Calling the outputFailure method in Output class

		}

	}
}

?>