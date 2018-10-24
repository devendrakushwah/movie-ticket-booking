
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CinemaBooking-Administration</a>
    </div>
    <button class="btn  btn-danger navbar-btn navbar-right" onclick="window.location.href='logout.php'" style="margin-right: 10px;">Logout</button>
    <button class="btn  btn-warning navbar-btn navbar-right" onclick="window.location.href='list.php'" style="margin-right: 10px;">List</button>
    <button class="btn  btn-primary navbar-btn navbar-right" onclick="window.location.href='admin.php'" style="margin-right: 10px;">Add</button>
  </div>
</nav>
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
		$ans="";
		$result=$con->query("select * from movie");
		if ($result->num_rows > 0) 
		{
    	// output data of each row

  $ans=$ans."<div class='container' style='magin:50px;'>";       
  $ans=$ans."<table class='table' border='1px'>";
  $ans=$ans."<thead><tr><th>ID</th><th>Title</th><th>Price</th><th>Action</th></tr></thead><tbody>";


    		while($row = $result->fetch_assoc()) 
    		{//echo "<pre>";
    			//print_r($row);
    			$ans=$ans."<tr>";
    			$id=$row['id'];
    			$ans=$ans."<td>".$row['id']."</td>"."<td>".$row['name']."</td>"."<td>".$row['price']."</td>";
    			$ans=$ans."<td><button class='btn btn-danger' onclick=";
    			$ans=$ans.'"';
    			$ans=$ans."window.location.href='delete.php?id=".$id."'";
    			$ans=$ans.'">';
    			$ans=$ans."Delete</button></td>";
        		$ans=$ans."</tr>";
    		}
    		$ans=$ans."</tbody></table></div>";

		}
		echo $ans;
	}
	else
	{
		//user type not admin
		echo "<script> location.href='signin.php'; </script>";
	}
}
?>