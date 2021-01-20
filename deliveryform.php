<?php require_once('connection.php'); 


?>
<!doctype html>
<html lang="en">
<head>
  
  <title>Delivery Form</title>
  

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 

  

  <style>

  body{
    overflow: auto;
    background-color: rgb(231, 229, 229);
  }
    #role, #name, #email, #phone{
font-size: 14px;
font-family: "Bahnschrift Light";
margin-left: 30px;
margin-top: 10px;
padding: 8px 46px;
  margin-left: 30px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  text-align: left;
}

input[type="submit"]{
  margin-left: 30px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  text-align: left;
  padding: 7px 112px;
  font-family: "Bahnschrift Light";
  font-size: 14px;
  font-weight: bold;
  background-color: rgb(37, 114, 165);
  color: aliceblue;
}



h3{
  font-family: "Cambria";
  margin-left: 92px;
  font-size: 21px;
  
}

label{
  font-weight: bold;
  font-size: 14px;
font-family: "Bahnschrift Light";
margin-left: 30px;
margin-top: 10px;

}

.form{
  border: 2px solid rgb(231, 229, 229);
  border-top-style: solid;
  border-top: 9px solid rgb(37, 114, 165);
  background-color: white;
  margin: 30px;
  margin-left: 500px;
  margin-right: 500px;
  
}

canvas{
  border: 1px solid #ccc;
  margin-left: 25px;
  width: 270px;
  height: 160px;
}




.description{
  font-size: 12px;
  text-align: center;
  font-family: "Bahnschrift Light";
  color: rgb(122, 120, 120);
}

.btn{
  margin-left: 25px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  text-align: left;
  padding: 4px 10px;
  font-family: "Bahnschrift Light";
  font-size: 10px;
  font-weight: bold;
  background-color: rgb(37, 114, 165);
  color: aliceblue;
}

.close{
  cursor: pointer;
}



#asterik{
  color: red;
  font-family:"Bahnschrift Light" ;
  font-size: 12px;
}

@media only screen and (max-width:1200px) {
  /* For mobile phones: */
  .form{
 width: 300px;
 margin: 5px;
 margin-left: 100px;
}
}
  </style>



  <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="css/ie9.css">
  <![endif]-->


</head>
<body onselectstart="return false">
<div>
<button type="button" class="btn " id="summary">Check summary</button><br>
    <?php

echo '<!-- The Modal -->';
echo '<div id="myModal" class="modal">';
echo '';
echo '<!-- Modal content -->';
echo '<div class="modal-content">';
echo '<span class="close">&times;</span>';
echo '<div class="text-center">';
// Attempt select query execution
$sql = "SELECT  don_id, don_cat, don_quantity, don_date, don_time FROM donation limit 1";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Donation ID</th>";
                echo "<th>Donation Type</th>";
                echo "<th>Donation Quantity</th>";
                echo "<th>Date</th>";
                echo "<th>Time</th>";
             
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['don_id'] . "</td>";
                echo "<td>" . $row['don_cat'] . "</td>";
                echo "<td>" . $row['don_quantity'] . "</td>";
                echo "<td>" . $row['don_date'] . "</td>";
                echo "<td>" . $row['don_time'] . "</td>";
             
                            
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
echo '</div>';
echo '<p id="asterik">&nbsp;&nbsp;&nbsp;&#8727;Make sure you check the <b>full</b> donation summary <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;details before filling the delivery form.</p><br><br>';
echo '</div>';
echo '';
echo '</div>';
echo '';
echo '';


  ?>
</div>
<div class="form">
  
  <form onsubmit="mySubmit()" method="POST" action="deliveryform-code.php">
 
    <h3>Delivery Form</h3>
   
    <label for="role">Select Role</label><br>
    <input type="radio" id="role" name="role" value="Donor" required>
    <label for="role">Donor</label><br>
    <input type="radio" id="role"  name="role" value="Charity_Rep" required>
    <label for="male">Charity Representative</label><br><br>
    <label for="name">Name / Charity Name </label><br>
    <input type="text" id="name" name="name"  required placeholder="Name"><br><br>
    <label for="tel">Contact number</label><br>
    <input type="tel" id="phone" placeholder="016-4567678" pattern="[0-9]{3}-[0-9]{7}" name="contact" required><br><br>
    <label for="email">Email address</label><br>
    <input type="email" id="email" placeholder="example@gmail.com" name="email"  required><br><br>
    <label for="sign">Please place your Signature</label><br><br>
  <div id="signature-pad" class="signature-pad" >
    <div class="signature-pad--body">
      <canvas id="canvas" ></canvas><br>
      
    </div>
    <div class="signature-pad--footer">
      <div class="description">Sign Above</div>
      <br>
      <div class="signature-pad--actions">
        <div>
          <button type="button" class="btn " data-action="clear">Clear</button>
          
          <button type="button" class="btn"  data-action="undo">Undo</button><br><br>

        </div>
     
      </div>
    </div>
  </div>
  <input type="submit"  id="submit" name="delivery">
  

  </form>
</div>

  <script src="js/signature_pad.js"></script>
  <script src="js/app.js"></script>

</body>
<script>
   // Get the modal
   var modal = document.getElementById("myModal");
  
  // Get the button that opens the modal
  var btn = document.getElementById("summary");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  var canvas = document.getElementById("canvas");
var dataURL = canvas.toDataURL();
$.ajax({
  type: "POST",
  url: "http://localhost/server.php",
  data: {image: dataUrl}
})
.done(function(respond){console.log("done: "+respond);})
.fail(function(respond){console.log("fail");})
.always(function(respond){console.log("always");})
</script>
</html>
