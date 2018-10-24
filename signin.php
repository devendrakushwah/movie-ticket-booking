<?php
include 'nav.php';
?>
<div style="width: 400px;height:300px;background-color: #f3f3f3;padding: 20px;align-items: center;border-radius: 5px;margin-left: 350px;">
	<form>
	    <div class="form-group">
	        <label>Username</label>
	        <input type="name" class="form-control" name="username" id="username" required  placeholder="Username">
	    </div>
	    <div class="form-group">
	        <label>Password</label>
	        <input type="password" class="form-control" name="password" id="password" required placeholder="Password">
	    </div>
	    <button class="btn btn-info" id="loginbtn">Login</button>
	    <center><a href="signup.php" style="margin-top: 20px;">Didn't have an account?</a></center>
	</form>
</div>

<!--Ajax part-->
<script type="text/javascript">
	var regbtn=document.getElementById("loginbtn");
	regbtn.addEventListener("click",function(){

			var username=document.getElementById("username").value;
			var password=document.getElementById("password").value;
	
			var url="login.php?username="+username+"&password="+password;
			//console.log(url)
			var req=new XMLHttpRequest();
			req.open('GET',url)
			req.onload=function()
			{
				console.log(req.responseText);
				var data=JSON.parse(req.responseText);
				if(data['rsp_code']==0){
					console.log("User doesn't exist");
				}
				else if(data['rsp_code']==1){
					console.log("Incorrect password");
				}
				else{
					console.log("Success!!!");
				}

			};
			req.send();
	});
</script>