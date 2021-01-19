<!-- <?php include('server.php'); ?> -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DonorCharitySignIn</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/docharsigninstyle.css">


<div class="container" id="container">
	<div class="form-container sign-up-container">
        <form method="POST" action="login-charity.php">
            <h2 style="text-align:left;">Sign In Account</h2>
			
         
            <input type="email" name="c_email" required placeholder="Email" />
            <input type="password" id="c_pass1" name="c_pass1" required placeholder="Password"  />
			<input type="checkbox" id="box" onclick="showpass()" >
			<label for="box" id="label-text" >Show Password</label><br>
            <button type="submit" name="login">Sign In</button>
		</form>
		
	</div>
	<div class="form-container sign-in-container">
		
		<form method="POST" action="login-donor.php">
			
            <h2 style="text-align:left;">Sign In Donor Account</h2>
            
            <input type="email" name="d_email" required placeholder="Email" />
            <input type="password"  id="d_pass1" name="d_pass1"  required placeholder="Password"  />
			<input type="checkbox" id="box" onclick="showpass()" >
			<label for="box" id="label-text">Show Password</label><br>
            <button type="submit" name="login">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Hello Friend!</h1>
				<p>Be the change you want to see in the world.</p>
			
                <button class="ghost" id="signIn">Sign In as Donor</button>
               
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello there,</h1>
				<p>True charity is the desire to be useful to others with no thought of recompense.</p>
				
                <button class="ghost" id="signUp">Sign In as Charity</button>
                
			</div>
		</div>
	</div>
</div>




<script src="js/script.js"></script>

