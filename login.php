<?php

include 'dbhelper.php';

error_reporting(0);

$username=$_GET["username"];
$password=$_GET["password"];
$response_code=0;// initialised with success(1)
$session_started=0;
//queries -->
$select="select * from user where username='".$username."' LIMIT 1";

//to check validity of the username
$select_result=mysqli_query($con,$select);
$cnt=mysqli_num_rows($select_result);

if($cnt==0)
{
	$reponse_code=0;
}

else
{
	$row=mysqli_fetch_array($select_result); //to get the row containing id and pass;
	if($row["password"]==$password)
	{
		session_start();
		$response_code=2;
		//success in login
		//do session creation here
		$_SESSION["name"]=$row["name"];
		$_SESSION["username"]=$row["username"];
		$_SESSION["phone"]=$row["phone"];
		$_SESSION["type"]="user";
		$session_started=1;
		echo "<script> location.href='home.php'; </script>";//log in
	}
	else
	{
		$response_code=1;
		//incorrect password
	}
}

$obj->rsp_code = $response_code;
$obj->ssn=$session_started;
$jsonObj =json_encode($obj);
echo $jsonObj;
?>
