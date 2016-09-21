<?php

/**
**************************************************************************** 
*Author: Shane Walsh
*Assignment: WE4.1 PHP Web App Assignment, Digital Skills Academy      
*Student ID: D15128603
*Date: 2016/05/20
****************************************************************************/

include ("getLogin.class.php");						//include class files getLogin and checkLogin
include ("checkLogin.class.php");



$UserNameObj = new GetLogin();							//Create new object of GetLogin class for username
$detailsArray[0] = $UserNameObj->getUserName();			//get UserName & set to 1st elemet of details array


$UserPasswordObj = new GetLogin();						//Create new object of GetLogin class for password
$detailsArray[1] = $UserPasswordObj->getPassword();		//get Password & set to 2nd element of details array


$Check = new CheckLogin($detailsArray);					//Create new object of CheckLogin class
$Check->checkDetails($detailsArray);					//Passing $detailsArray to checkDetails method

?>