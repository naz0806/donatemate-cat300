<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VolunteerSignUp</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/vologinstyle.css">


<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST" action="register-volunteer.php">
			
            <h1>Create Account</h1>
            <input type="text" required placeholder="Firstname"/>
            <input type="text" required placeholder="Lastname"/>
            <input type="email" required placeholder="example@gmail.com" />
            <input type="password" id="pass" required placeholder="Above 8 characters" pattern=".{8,}" />
			<input type="checkbox" id="box" onclick="showpass()" >
			<label for="box" id="label-text" >Show Password</label><br>
            <input type="password"  id="cpass" required placeholder="Re-type password" pattern=".{8,}" />
			<input type="checkbox" id="box" onclick="showpass()" >
			<label for="box" id="label-text">Show Password</label><br>
            <button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST" action="login-volunteer.php">
			<h1>Sign in</h1>
            <input type="email"  required placeholder="Email" />
            <input type="password" id="password" required placeholder="Password" />
            <input type="checkbox" id="box" onclick="showpass()" >
			<label for="box" id="label-text" >Show Password</label><br>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info.</p>
			
				<button class="ghost" id="signIn">Sign In as Volunteer</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Grab your opportunity now as a volunteer to serve the community.</p>
				
				<button class="ghost" id="signUp">Sign Up as Volunteer</button>
			</div>
		</div>
	</div>
</div>




<script src="js/script.js"></script>

