<?php
include 'nav.php';
?>
<div style="width: 400px;background-color: #f3f3f3;padding: 20px;align-items: center;border-radius: 5px;margin-left: 350px">
	<form>
	    <div class="form-group">
	        <label>Name</label>
	        <input type="text" class="form-control" id="name" required placeholder="Name">
	    </div>
	    <div class="form-group">
	        <label>Username</label>
	        <input type="text" class="form-control" id="username" required placeholder="Username">
	    </div>
	    <div class="form-group">
	        <label>Password</label>
	        <input type="password" class="form-control" id="password" required placeholder="Password">
	    </div>
	    <div class="form-group">
	        <label>Mobile</label>
	        <input type="text" class="form-control" id="phone" required placeholder="Mobile">
	    </div>
	    <button class="btn btn-info" id="regbtn">Register</button><br/>
	    <center><a href="signin.php" style="margin-top: 20px">Already have an account?</a></center>
	</form>
</div>



<!--Ajax part-->
<script type="text/javascript">
	var regbtn=document.getElementById("regbtn");
	regbtn.addEventListener("click",function(){

			var name=document.getElementById("name").value;
			var username=document.getElementById("username").value;
			var password=document.getElementById("password").value;
			var phone=document.getElementById("phone").value;
	
			var url="register.php?name="+name+"&username="+username+"&password="+password+"&phone="+phone;
			console.log(url)
			var req=new XMLHttpRequest();
			req.open('GET',url)
			req.onload=function()
			{
				console.log(req.responseText);
				var data=JSON.parse(req.responseText);
				console.log(data);
			};
			req.send();
	});
</script>