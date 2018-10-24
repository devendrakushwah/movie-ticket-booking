<?php
include 'dbhelper.php';
$bid=$_GET["bid"];
$mid=$_GET["mid"];

$select="select * from bookings where bid='".$bid."' LIMIT 1";
$select_result=mysqli_query($con,$select);
$row=mysqli_fetch_array($select_result);
$select="select * from movie where id='".$mid."'";
$select_result=mysqli_query($con,$select);
$row2=mysqli_fetch_array($select_result);
$seatsinfo=$row['seatsinfo'];
$seats=$row2['seats'];

$ar1=str_split($seats);
$ar2=explode(',',$seatsinfo);
//print_r($ar2);
//print_r($ar1);
for ($i=0; $i <count($ar2) ; $i++) { 
	$ar1[$ar2[$i]]='0';
}
//increse the remaining seats
$row=implode($ar1);
//echo $row;
$con->query("update movie set seats='".$row."' where id='".$mid."'");
$con->query("delete from bookings where bid='".$bid."'");
echo "<script> location.href='bookings.php'; </script>";
?>
