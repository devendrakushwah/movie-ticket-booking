<?php

include 'dbhelper.php';

error_reporting(0);

$name=$_GET["name"];
$username=$_GET["username"];
$password=$_GET["password"];
$phone=$_GET["phone"];

$response_code=1; // initialised with success(1)

//queries -->
$select="select * from user where username='".$username."'";
$insert="insert into user values('".$name."','".$username."','".$password."','".$phone."')";

//to check existig username
$select_result=mysqli_query($con,$select);
$cnt=mysqli_num_rows($select_result);

if($cnt>0)
{
	$reponse_code=0;
}
else
{
	$con->query($insert);
}

$obj->rsp_code = $response_code;
$obj->flag = $cnt;
$jsonObj =json_encode($obj);
echo $jsonObj;
?>
