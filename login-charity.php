<!--
Here, we write code for login.
-->
<?php

require_once('connection.php');
$c_email = $c_pass = $c_pass1 = '';

$c_email = mysqli_real_escape_string($link, $_POST['c_email']);
$c_pass1 = mysqli_real_escape_string($link, $_POST['c_pass1']);
$c_pass = MD5($d_pass1);

$sql = "SELECT * FROM charity WHERE c_email='$d_email' AND c_pass='$d_pass'";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$d_id = $row["c_id"];
		$d_email = $row["c_email"];
		session_start();
		$_SESSION['c_id'] = $d_id;
		$_SESSION['c_email'] = $d_email;
	}
	header("Location: https://donatemate-cat300.herokuapp.com/charity-homepage.php");
}
else
{
	echo "Invalid email or password";
}
?>

  
<!--
Here, we write code for login.
-->
<?php
