<!-- <?php include('server.php'); ?> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DonorCharitySignUp</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/docharsignupstyle.css">



<div class="container" id="container">
	<div class="form-container sign-up-container">
        <form method="POST" action="register-charity.php">
		<!-- display validation errors here -->
		
            <h3 style="text-align:left;">Create Charity Account</h3>
			<input type="text" name="c_name"  required placeholder="Name of Charity Organization"/>
			<div>
			<label for="c_license" id="upload">Upload Registration License: (PDF version)</label>
			<input type="file" id="c_license" name="c_license" accept="file extension/*">
			</div>
			<input type="email" name="c_email"  required placeholder="example@gmail.com" />
            <input type="password" id="c_pass1" name="c_pass1" required placeholder="Above 8 characters" pattern=".{8,}" />
			<input type="checkbox" id="box" onclick="showpass()" >
			<label for="box" id="label-text" >Show Password</label>
            <input type="password"  id="c_pass2" name="c_pass2" required placeholder="Re-type password" pattern=".{8,}" />
			<input type="checkbox" id="box" onclick="showpass()" >
			<label for="box" id="label-text">Show Password</label><br>
			<button type="submit" name="register">Sign Up</button>
		</form>
		
	</div>
	<div class="form-container sign-in-container">
		
		<form method="POST" action="register-donor.php">
			
            <h3 style="text-align:left;">Create Donor Account</h3>
            <input type="text" name="d_fname"  required placeholder="Firstname"/>
            <input type="text" name="d_lname" required placeholder="Lastname"/>
            <input type="email" name="d_email"  required placeholder="example@gmail.com" />
            <input type="password" id="d_pass1" name="d_pass1"  placeholder="Above 8 characters" pattern=".{8,}" />
			<input type="checkbox" id="box" onclick="showpass()" >
			<label for="box" id="label-text" >Show Password</label>
            <input type="password"  id="d_pass2" name="d_pass2"  placeholder="Re-type password" pattern=".{8,}" />
			<input type="checkbox" id="box" onclick="showpass()" >
			<label for="box" id="label-text">Show Password</label><br>
            <button type="submit" name="register">Sign Up</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Hello Friend!</h1>
				<p>Even a small donation can make a big difference.</p>
			
                <button class="ghost" id="signIn">Sign Up as Donor</button><br><br><br><br>
                <p id="al">Already have an account?</p>
                <a href="signIn.php">Login</a>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello there,</h1>
				<p>Need a helping hand for your charity? Come collaborate with Us!</p>
				
                <button class="ghost" id="signUp">Sign Up as Charity</button><br><br><br><br>
                <p id="al">Already have an account?</p>
                <a href="signIn.php">Login</a>
			</div>
		</div>
	</div>
</div>




<script src="script.js"></script>

