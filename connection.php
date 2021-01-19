
<?php
//connect to the database
$link = mysqli_connect('localhost', 'root', '', 'donatemate') or die($link);

if($link->connect_error){
    die('Connection Failed : '.$mysqli->connect_error);
}


?>