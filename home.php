<?php
include 'nav_active.php';
include 'dbhelper.php';
error_reporting(0);
    $ans="";
    $result=$con->query("select * from movie");
    if ($result->num_rows > 0) 
    {
      // output data of each row

  $ans=$ans."<div class='container' style='magin:50px;'>";
  $ans=$ans."<center><h2>Now Showing</h2></center>" ;      
  $ans=$ans."<table class='table'>";
  $ans=$ans."<tbody>";

        while($row = $result->fetch_assoc()) 
        {//echo "<pre>";
          //print_r($row);
          $ans=$ans."<tr>";
          $id=$row['id'];
          $src='"https://www.interserver.net/tips/wp-content/uploads/2016/10/404error.jpeg"';
          $ans=$ans."<td><img width='120px' height='180px' src='".$row['image']."' onerror='this.src=".$src."' alt=''></td>"."<td>".$row['name']."</td>"."<td>".$row['start'].'-'.$row['end']."</td>"."<td>₹".$row['price']."</td>";
          $ans=$ans."<td><button class='btn btn-success' onclick=";
          $ans=$ans.'"';
          $ans=$ans."window.location.href='book.php?id=".$id."'";
          $ans=$ans.'">';
          $ans=$ans."Book Now</button></td>";
            $ans=$ans."</tr>";
        }
        $ans=$ans."</tbody></table></div>";

    }
    echo $ans;

?>