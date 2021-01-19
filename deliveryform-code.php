
<?php
    
    require_once('connection.php');
    
    $role = $name = $contact = $email = '';
  
    //if the register2 button is clicked
    if (isset($_POST['delivery'])) {
        $role = mysqli_real_escape_string($link, $_POST['role']);
        $name = mysqli_real_escape_string($link, $_POST['name']);
        $contact = mysqli_real_escape_string($link, $_POST['contact']);
        $email = mysqli_real_escape_string($link, $_POST['email']);

        
        $sql = "DELETE FROM latest_task
        LIMIT 1";
        mysqli_query($link, $sql);

      
    }
       
        $sql = "INSERT INTO delivery (role_type, del_name, del_contact, del_email)
                VALUES ('$role', '$name', '$contact' ,'$email')";
        mysqli_query($link, $sql);

        if($result)
        {
            header("Location: ");
        }
        else
        {
            echo "Error :".$sql;
        }

  
?>