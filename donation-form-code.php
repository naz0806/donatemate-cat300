<?php

require_once('connection.php');

    $category = $quantity = $don_type = $date = $time = $address = $line1= $line2 = $city = $postal ='';
  
    if (isset($_POST['donation'])) {
        $category = mysqli_real_escape_string($link, $_POST['category']);
        $quantity = mysqli_real_escape_string($link, $_POST['quantity']);
        $don_type = mysqli_real_escape_string($link, $_POST['don_type']);
        $date = mysqli_real_escape_string($link, $_POST['date']);
        $time = mysqli_real_escape_string($link, $_POST['time']);
        $address = mysqli_real_escape_string($link, $_POST['address']);
        $line1 = mysqli_real_escape_string($link, $_POST['line1']);
        $line2 = mysqli_real_escape_string($link, $_POST['line2']);
        $city = mysqli_real_escape_string($link, $_POST['city']);
        $postal = mysqli_real_escape_string($link, $_POST['postal']);
    }

  
       
    $sql = "INSERT INTO donation (don_cat, don_quantity, don_type, don_date, don_time, don_add_opt, don_add1, don_add2, don_city, don_postal)
            VALUES ('$category', '$quantity', '$don_type' ,'$date' ,'$time','$address','$line1','$line2','$city','$postal')";
    $result = mysqli_query($link, $sql);

    if($result)
    {
        header("Location: https://donatemate-cat300.herokuapp.com/donor-dash-page.php");
    }
    else
    {
        echo "Error :".$sql;
    }


?>
