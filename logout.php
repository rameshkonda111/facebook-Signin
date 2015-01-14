<?php 
/*
Author: Ramesh Konda
Date : 14-1-2015
purpose : To logout
*/
session_start();
session_unset();
    $_SESSION['FBID'] = NULL;
    $_SESSION['USERNAME'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
    $_SESSION['LOGOUT'] = NULL;
header("Location: index.php");        // you can enter home page here ( Eg : header("Location: " ."http://www.krizna.com"); 
?>
