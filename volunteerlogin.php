<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VolunteerLogin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#title {
  color: rgb(98, 28, 117);
  padding-right: 100px;
  padding-top: 45px;
  text-align: right;
  font-family: "Cursive";
  font-size: 40px;
  font-weight: bold;
}

input[type=password],textarea {
  width: 120%;
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
  width: 120%;
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
  width:55%;
  background-color: blue;
  color: white;
  padding: 8px 2px;
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

#log{
font-size: 12px;
margin-left: 79%;
font-family: "Georgia";
color: blue;
}

#box{
    width : 10px;
}


#img {
  float: left;
  width: fit-content;
  margin-left:150px ;
  margin-top: 70px;
 
}
#label-text{
font-size: 10px;
}
</style>
</head>
<body>

<div id="img">
        <img src="images/voluntary.jpg" alt="Voluntary" width="550" height="400" >
 </div>
 
<h1 id="title">YOUNG . GLOBAL . ACTIVE</h1><br><br>

<div class="vform" >
<form >
 
   
    <label for="email">Email Address</label><br>
    <input type="text" id="email" name="email" required placeholder="example@gmail.com"><br><br>
    <label for="pass">Password</label><br>
    <input type="password" id="pass" name="password" required placeholder="Above 8 characters" pattern=".{8,}" ><br>
    <input type="checkbox" id="box"onclick="showpass()"><span id="label-text">Show Password</span><br><br>
    <input type="submit" value="Login">
</form> 
</div>

</body>
<script>

var password = document.getElementById("pass");

  


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