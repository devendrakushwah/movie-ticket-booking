<?php
session_start();
include 'dbhelper.php';
$id=$_GET["id"];
$choice=$_GET["choice"];
$name=$_GET["name"];
//echo $choice;
$b = str_replace( ',', '', $choice );
//echo $b;
$seat_numbers="";
$c=0;
for($i=0;$i<100;$i++)
{
	if($b[$i]=='1')
	{
		$c=$c+1;
		$seat_numbers=$seat_numbers.$i;
		$seat_numbers=$seat_numbers.',';
	}
}
$seat_numbers=rtrim($seat_numbers,',');
$username=$_SESSION["username"];
$insert="insert into bookings(movieid,name,username,seats,seatsinfo) values('".$id."','".$name."','".$username."','".$c."','".$seat_numbers."')";
//echo $insert;
$con->query($insert);
$b = str_replace( '2', '1', $b);
$update='update movie set seats="'.$b.'" where id="'.$id.'"';
$con->query($update);
echo "<script> location.href='bookings.php'; </script>";
//echo $seat_numbers;
?>