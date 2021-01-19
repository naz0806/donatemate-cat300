<?php

//connect to the database
require_once('connection.php');

    $d_fname = $d_lname = $d_email = $d_pass1 = $d_pass2 = "";
   

    //if the register2 button is clicked
    if (isset($_POST['register'])) {
        $d_fname = mysqli_real_escape_string($link, $_POST['d_fname']);
        $d_lname = mysqli_real_escape_string($link, $_POST['d_lname']);
        $d_email = mysqli_real_escape_string($link, $_POST['d_email']);
        $d_pass1 = mysqli_real_escape_string($link, $_POST['d_pass1']);
        $d_pass2 = mysqli_real_escape_string($link, $_POST['d_pass2']);
    }

        $d_pass = MD5($d_pass1); //encrypt password before storing in database (security)
        $sql = "INSERT INTO donor (d_fname, d_lname, d_email, d_pass)
                VALUES ('$d_fname','$d_lname','$d_email','$d_pass')";
        $result = mysqli_query($link, $sql);

        if($result)
        {
            header("Location: https://donatemate-cat300.herokuapp.com/signIn.php");
        }
        else
        {
            echo "Error :".$sql;
        }
    
?>
