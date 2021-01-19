
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
       
        $sql = "INSERT INTO delivery (role_type, del_name, del_contact, del_email)
                VALUES ('$role', '$name', '$contact' ,'$email')";
        mysqli_query($link, $sql);

        if($result)
        {
            header("Location: https://donatemate-cat300.herokuapp.com/volunteer-dash.php");
        }
        else
        {
            echo "Error :".$sql;
        }

  
?>
