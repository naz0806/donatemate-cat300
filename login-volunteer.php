<!--
Here, we write code for login.
-->
<?php

require_once('connection.php');
$v_email = $v_pass = $v_pass1 = '';

$v_email = mysqli_real_escape_string($link, $_POST['v_email']);
$v_pass1 = mysqli_real_escape_string($link, $_POST['v_pass1']);
$v_pass = MD5($v_pass1);

$sql = "SELECT * FROM volunteer WHERE v_email='$v_email' AND v_pass='$v_pass'";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$d_id = $row["v_id"];
		$d_email = $row["v_email"];
		session_start();
		$_SESSION['v_id'] = $v_id;
		$_SESSION['v_email'] = $v_email;
	}
	header("Location: https://donatemate-cat300.herokuapp.com/volunteer-homepage.php");
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

