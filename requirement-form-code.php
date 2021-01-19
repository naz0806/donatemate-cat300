
<?php

require_once('connection.php');

    $don_category = $item_category = $quantity = $supplies = $description = '';
    
    //if the register2 button is clicked
    if (isset($_POST['requirement'])) {
        $don_category = mysqli_real_escape_string($link, $_POST['req_cat']);
        $item_category = mysqli_real_escape_string($link, $_POST['req_item_cat']);
        $quantity = mysqli_real_escape_string($link, $_POST['req_quantity']);
        $supplies = mysqli_real_escape_string($link, $_POST['req_supplies']);
        $description = mysqli_real_escape_string($link, $_POST['req_desc']);
        
    }


    $sql = "INSERT INTO requirement (req_cat, req_item_cat, req_quantity, req_supplies, req_desc)
            VALUES ('$don_category', '$item_category','$quantity', '$supplies' ,'$description' )";
    $result = mysqli_query($link, $sql);
    if($result)
    {
        header("Location: https://donatemate-cat300.herokuapp.com/charity-dash-page.php");
    }
    else
    {
        echo "Error :".$sql;
    }


    
?>
