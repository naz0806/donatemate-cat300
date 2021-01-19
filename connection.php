
<?php
//connect to the database
$link = mysqli_connect('remotemysql.com', 'ZBJKVx0aFi', 'nmtIUSsxqS', 'ZBJKVx0aFi') or die($link);

if($link->connect_error){
    die('Connection Failed : '.$mysqli->connect_error);
}


?>
