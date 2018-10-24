<?php
include 'dbhelper.php';
session_start();
//error_reporting(0);
$response_code=0;
if(!isset($_SESSION["type"]))
{
	//no admin logged in
	echo "<script> location.href='admin_login.php'; </script>";
}
else
{
	if($_SESSION["type"]=="admin")
	{
		$id=$_GET['id'];
		$con->query("delete from movie where id='".$id."'");
		echo "<script> location.href='list.php'; </script>";
	}
	else
	{
		echo "<script> location.href='admin_login.php'; </script>";
	}
}