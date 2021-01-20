
<?php
    
    require_once('connection.php');
    
    $role = $name = $contact = $email = '';
  
    //if the register2 button is clicked
    if (isset($_POST['delivery'])) {
        $role = mysqli_real_escape_string($link, $_POST['role']);
        $name = mysqli_real_escape_string($link, $_POST['name']);
        $contact = mysqli_real_escape_string($link, $_POST['contact']);
        $email = mysqli_real_escape_string($link, $_POST['email']);
}

$sql = "SELECT  don_id FROM donation limit 1";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
       
        while($row = mysqli_fetch_array($result)){
           
             $donID =  $row['don_id'] ;
                            
           
        }
       
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


       
        $sql = "INSERT INTO delivery (don_id, role_type, del_name, del_contact, del_email)
                VALUES ('$donID','$role', '$name', '$contact' ,'$email')";
        
 $result = mysqli_query($link, $sql);

        if($result)
        {
            header("Location: https://donatemate-cat300.herokuapp.com/volunteer-dash.php");
        }
        else
        {
            echo "Error :".$sql;
        }

  
?>
