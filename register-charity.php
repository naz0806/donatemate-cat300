<?php

//connect to the database
require_once('connection.php');

    $c_name = $c_license = $c_email = $c_pass1 = $c_pass2 = "";
   

    //if the register2 button is clicked
    if (isset($_POST['register'])) {
        $c_name = mysqli_real_escape_string($link, $_POST['c_name']);
        $c_license = mysqli_real_escape_string($link, $_POST['c_license']);
        $c_email = mysqli_real_escape_string($link, $_POST['c_email']);
        $c_pass1 = mysqli_real_escape_string($link, $_POST['c_pass1']);
        $c_pass2 = mysqli_real_escape_string($link, $_POST['c_pass2']);
    }

        $c_pass = MD5($c_pass1); //encrypt password before storing in database (security)
        $sql = "INSERT INTO charity (c_name, c_license, c_email, c_pass)
                VALUES ('$c_name','$c_license','$c_email','$c_pass')";
        $result = mysqli_query($link, $sql);

        if($result)
        {
            header("Location: http://localhost/donatemate-cat300/donatemate/web/signIn.php");
        }
        else
        {
            echo "Error :".$sql;
        }
    
?>