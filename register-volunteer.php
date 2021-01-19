<?php

//connect to the database
require_once('connection.php');

    $v_fname = $v_lname = $v_email = $v_pass1 = $v_pass2 = "";
   

    //if the register2 button is clicked
    if (isset($_POST['register2'])) {
        $v_fname = mysqli_real_escape_string($link, $_POST['v_fname']);
        $v_lname = mysqli_real_escape_string($link, $_POST['v_lname']);
        $v_email = mysqli_real_escape_string($link, $_POST['v_email']);
        $v_pass1 = mysqli_real_escape_string($link, $_POST['v_pass1']);
        $v_pass2 = mysqli_real_escape_string($link, $_POST['v_pass2']);
    }

        $v_pass = MD5($v_pass1); //encrypt password before storing in database (security)
        $sql = "INSERT INTO volunteer (v_fname, v_lname, v_email, v_pass)
                VALUES ('$v_fname','$v_lname','$v_email','$v_pass')";
        $result = mysqli_query($link, $sql);

        if($result)
        {
            header("Location: http://localhost/donatemate-cat300/donatemate/web/signUpInVolunteer.php);
        }
        else
        {
            echo "Error :".$sql;
        }
    
?>