<?php

/*****************************************************************************
*Author: Shane Walsh
*Assignment: WE4.1 PHP Web App Assignment, Digital Skills Academy      
*Student ID: D15128603
*Date: 2016/05/20
*****************************************************************************/

class OutPut 			//Output status class containing two methods which will be called if login success or failure 
{

	public function outputSuccess($detailsArray)	//Success output to screen method
	{

				$username = $detailsArray[0];		//extracting username & password from $detailsArray
				$password = $detailsArray[1];

				echo "-- Login Success -- <BR><BR>";
    			echo "Your Username is: " . $username;			//Login Success: Output to screen.
    			echo "<BR>";
    			echo "Your Password is: " . $password;

	}

	public function outputFailure($detailsArray)	//Failure output to screen method
	{
				$username = $detailsArray[0];		//extracting username & password from $detailsArray
				$password = $detailsArray[1];

				echo "-- FAILURE -- Please Try Again! <BR><BR>";
				echo "The Username entered: " . $username;			//Login Failure. Output to screen. 
    			echo "<BR>";
    			echo "The Password entered: " . $password;

	}


}

?>