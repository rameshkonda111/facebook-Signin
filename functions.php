<?php
/*
Author: Ramesh Konda
Date : 14-1-2015
purpose : Storing logged user details into database
*/
require 'dbconfig.php';
function checkuser($fuid,$funame,$ffname,$femail){
    	$check = mysql_query("select * from Users where Fuid='$fuid'");
	$check = mysql_num_rows($check);
	if (empty($check)) { // if new user . Insert a new record		
	$query = "INSERT INTO Users (Fuid,Funame,Ffname,Femail) VALUES ('$fuid','$funame','$ffname','$femail')";
	mysql_query($query);	
	} else {   // If Returned user . update the user record		
	$query = "UPDATE Users SET Funame='$funame', Ffname='$ffname', Femail='$femail' where Fuid='$fuid'";
	mysql_query($query);
	}
}?>
