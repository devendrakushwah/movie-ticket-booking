
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
  </div>
</nav>

<div style="width: 400px;height:300px;background-color: #f3f3f3;padding: 20px;align-items: center;border-radius: 5px;margin-left: 350px;">
	<form action="admin.php" method="post">
	    <div class="form-group">
	        <label>Admin</label>
	        <input type="name" class="form-control" name="admin"  required  placeholder="Admin">
	    </div>
	    <div class="form-group">
	        <label>Password</label>
	        <input type="password" class="form-control" name="password" required placeholder="Password">
	    </div>
	    <button class="btn btn-info" type="submit">Login</button>
	</form>
</div>
</body>