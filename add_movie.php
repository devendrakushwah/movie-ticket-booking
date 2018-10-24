<?php
include 'dbhelper.php';
session_start();
error_reporting(0);
$response_code=0;
if(isset($_SESSION["type"]))
{
	if($_SESSION["type"]=="admin")
	{
		$title=$_GET["title"];
		$desc=$_GET["desc"];
		$genre=$_GET["genre"];
		$image=$_GET["image"];
		$start=$_GET["start"];
		$end=$_GET["end"];
		$price=$_GET["price"];
		$query="insert into movie (name,description,genre,image,start,end,price) values('".$title."','".$desc."','".$genre."','".$image."','".$start."','".$end."','".$price."')";
		$con->query($query);
		$response_code=1;

		$obj->rsp_code = $response_code;
		$jsonObj =json_encode($obj);
		echo $jsonObj;
	}
	else
	{
		echo "<script> location.href='admin_login.php'; </script>";
	}
}
else
{
	echo "<script> location.href='admin_login.php'; </script>";
}
?>