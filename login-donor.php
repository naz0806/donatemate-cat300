<!--
Here, we write code for login.
-->
<?php

require_once('connection.php');
$d_email = $d_pass = $d_pass1 = '';

$d_email = mysqli_real_escape_string($link, $_POST['d_email']);
$d_pass1 = mysqli_real_escape_string($link, $_POST['d_pass1']);
$d_pass = MD5($d_pass1);

$sql = "SELECT * FROM donor WHERE d_email='$d_email' AND d_pass='$d_pass'";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$d_id = $row["d_id"];
		$d_email = $row["d_email"];
		session_start();
		$_SESSION['d_id'] = $d_id;
		$_SESSION['d_email'] = $d_email;
	}
	header("Location: http://localhost/donatemate-cat300/donatemate/web/donor-homepage.php");
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

