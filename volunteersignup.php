<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VolunteerSignUp</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#title {
  color: black;
  padding-right: 120px;
  padding-top: 4px;
  text-align: right;
  font-family: "Georgia";
  font-size: 45px;
  font-weight: bold;
}

#titledes {
  color :blue;
  padding-right: 148px;
  padding-top: 1px;
  text-align: right;
  font-family: "Georgia";
  font-size: 15px;
  font-weight: bold;
}

input[type=text1],textarea {
  width: 25%;
  padding: 10px 20px;
  margin: 10px 0;
  display: inline-block;
  border: 1px solid rgb(153, 149, 149);
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #f2f8f2;
  border-style: ridge;

 
}

input[type=password],textarea {
  width: 83%;
  padding: 10px 20px;
  margin: 10px 0;
  display: inline-block;
  border: 1px solid rgb(153, 149, 149);
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #f2f8f2;
  border-style: ridge;

 
}


input[type=text] ,textarea{
  width: 83%;
  padding: 10px 20px;
  margin: 10px 0;
  display: inline-block;
  border: 1px solid rgb(153, 149, 149);
  border-radius: 4px;
  box-sizing: border-box;
  background-color : #f2f8f2;
  border-style: ridge;
  
}

input[type=submit] {
  width:83%;
  background-color: blue;
  color: white;
  padding: 12px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
   cursor: pointer;
}

input,label{
font-size: 15px;
font-family: "Georgia";
}

.vform{
width : fit-content;
margin-left: 65%;
}

#already{
font-size: 12px;
margin-left: 75%;
font-family: "Georgia";
}

a{
font-size: 12px;
margin-left: 79%;
font-family: "Georgia";
color: blue;
text-decoration: none;
}

#box{
    width : 10px;
}


#img {
  float: left;
  width: fit-content;
  margin-left:150px ;
  margin-top: 50px;
 
}
#label-text{
font-size: 10px;
}
</style>
</head>
<body>

<div id="img">
        <img src="volunteer.jpg" alt="Voluntary" width="500" height="500" >
 </div>
 
<h1 id="title">Be a Volunteer!</h1>
<p id="titledes">Help us make the world a better place</p><br>
<div class="vform" >
<form action="volunteerlogin.html">
 
    <label for="fname">First name</label>
    <input type="text1" id="fname" name="fname" required placeholder="Firstname" >
    <label for="lname">Last name</label>
    <input type="text1" id="lname" name="lname" required placeholder="Lastname"><br>
    <label for="email">Email Address</label><br>
    <input type="text" id="email" name="email" required placeholder="example@gmail.com"><br>
    <label for="pass">Password</label><br>
    <input type="password" id="pass" name="password" required placeholder="Above 8 characters" pattern=".{8,}" ><br>
    <input type="checkbox" id="box"onclick="showpass()"><span id="label-text">Show Password</span><br><br>
    <label for="cpass">Confirm Password</label><br>
    <input type="password" id="cpass" name="password" required placeholder="Re-type password" pattern=".{8,}"><br>
    <input type="checkbox" id="box" onclick="showpass()" ><span id="label-text">Show Password</span>
    
    <input type="submit" value="Sign Up">
</form> 
</div>
<p id="already" >Already have an account?</p>

<a href="volunteerlogin.html">Login</a>
 
</body>
<script>

var password = document.getElementById("pass")
  , confirm_password = document.getElementById("cpass");

  


function validatePassword(){
   
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}



password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

function showpass() {
  var x = document.getElementById("pass");
  var y = document.getElementById("cpass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}

</script>