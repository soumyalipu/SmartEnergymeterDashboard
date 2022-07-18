<?php
ob_start();
   	require_once("EntityUserdata.php");
	require_once("ModelUserdata.php");
	require_once("connection.php");
	global $dbc;
	$userdataModel = new ModelUserdata($dbc);
	$userdat=$_GET['email'];
	if($userdataModel -> UpdateUserstatus($userdat))
		{
			 echo '<script>alert("Your Email Verified..");window.location="login.php";</script>';
		}
		else
		{
			 echo '<script>alert("Unable to verify");window.location=window.location.href;</script>';
		}
?>