<?php

/**************************************************************************
*Author: Shane Walsh
*Assignment: WE4.1 PHP Web App Assignment, Digital Skills Academy      
*Student ID: D15128603
*Date: 2016/05/20
***************************************************************************/

	class GetLogin 			//GetLogin class containing two methods to get the username and password.
	{

		public function getUserName()				//method to get username  
		{
			
			$detailsArray[0] = $_POST["username"];		//get username from form and assign it to first element of array
			
			return $detailsArray[0];					//return the array with username as first element[0]
			
		}

		public function getPassword()				//mehthod to get password 
		{

			$detailsArray[1] = $_POST["password"];	//get password from form and assign it to second element of array

			return $detailsArray[1];				//return array with with password as second element[1]

		}
	}

?>