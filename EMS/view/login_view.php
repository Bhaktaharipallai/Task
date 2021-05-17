<form action='<?php echo getUrL().'/Verify-Login';?>' method="POST">

<div class="login-box">
			<h1>Admin Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Adminname"name="adminname" value="" required>
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"name="password" value="" required>
			</div>
 
			<input class="button" type="submit"name="login" value="Log in">
		</div>

</form>