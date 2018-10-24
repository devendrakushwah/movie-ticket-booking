<?php
session_start();
if(!isset($_SESSION["name"]))
{
  echo "Please login in to continue, Redirecting!!!!!";
?>
  <script>

    setTimeout(function(){
      window.location.href = "signin.php";
    },1000); 
    
  </script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">
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
      <a class="navbar-brand" href="home.php">CinemaBooking</a>
    </div>
    <button class="btn  btn-danger navbar-btn navbar-right" onclick="window.location.href='logout.php'" style="margin-right: 10px;">Logout</button>
    <button class="btn btn-info  navbar-btn navbar-right" onclick="window.location.href='bookings.php'" style="margin-right: 10px;">My Bookings</button>
  </div>
</nav>
</body>
</html>
