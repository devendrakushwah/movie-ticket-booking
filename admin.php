<?php

session_start();
if(isset($_SESSION["type"]))
{
	//already logged in
	if($_SESSION["type"]=="user")
	{
		//wrong id pass, redirect to login
		echo "<script> location.href='admin_login.php'; </script>";
	}
}
else
{
	$admin=$_POST["admin"];
	$password=$_POST["password"];
	if($admin=="admin" && $password=="pass123")
	{
		$_SESSION["type"]="admin";
	}
	else
	{
		//wrong id pass, redirect to login
		echo "<script> location.href='admin_login.php'; </script>";
        exit;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
      <a class="navbar-brand" href="#">CinemaBooking Administration</a>
    </div>
    	<button class="btn  btn-danger navbar-btn navbar-right" onclick="window.location.href='logout.php'" style="margin-right: 10px;">Logout</button>
    <button class="btn  btn-warning navbar-btn navbar-right" onclick="window.location.href='list.php'" style="margin-right: 10px;">List</button>
    <button class="btn  btn-primary navbar-btn navbar-right" onclick="window.location.href='admin.php'" style="margin-right: 10px;">Add</button>
    </div>
</nav>


<div style="width: 400px;background-color: #f3f3f3;padding: 20px;align-items: center;border-radius: 5px;margin-left: 350px">
	<form>
	    <div class="form-group">
	        <label>Title</label>
	        <input type="text" class="form-control" id="title" required>
	    </div>
	    <div class="form-group">
	        <label>Description</label>
	        <input type="text" class="form-control" id="desc" required>
	    </div>
	    <div class="form-group">
	        <label>Genre</label>
	        <input type="text" class="form-control" id="genre" required>
	    </div>
	    <div class="form-group">
	        <label>Image Link</label>
	        <input type="text" class="form-control" id="image" required>
	    </div>
	    <div class="form-group">
	        <label>Start</label>
	        <input type="text" class="form-control" id="start" required>
	    </div>

	   	<div class="form-group">
	        <label>End</label>
	        <input type="text" class="form-control" id="end" required>
	    </div>

	    <div class="form-group">
	        <label>Price</label>
	        <input type="text" class="form-control" id="price" required>
	    </div>

	    <button class="btn btn-info" id="addbtn">Add new movie</button><br/>
	</form>
</div>


</body>
</html>

<!--Ajax part-->
<script type="text/javascript">


	// TODO add validation to check empty form fiels

	var addbtn=document.getElementById("addbtn");
	addbtn.addEventListener("click",function(){

			var title=document.getElementById("title").value;
			var desc=document.getElementById("desc").value;
			var genre=document.getElementById("genre").value;
			var image=document.getElementById("image").value;
			var start=document.getElementById("start").value;
			var end=document.getElementById("end").value;
			var price=document.getElementById("price").value;
	
			var url="add_movie.php?title="+title+"&desc="+desc+"&genre="+genre+"&image="+image+"&start="+start+"&end="+end+"&price="+price;
			console.log(url)
			var req=new XMLHttpRequest();
			req.open('GET',url)
			req.onload=function()
			{
				console.log(req.responseText);
				var data=JSON.parse(req.responseText);
				console.log(data);
				if(data["rsp_code"]==1)
				{
					alert("Successfully added!");
				}
			};
			req.send();
	});
</script>