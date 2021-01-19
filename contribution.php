<?php 

//connect to the database
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
    <title>Make contribution</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="css/contribution.css">
    
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body>

    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-heart"></span>
                <span>DonateMate</span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="contribution.php">
                        <span class="ti-package"></span>
                        <span>Make Contribution</span>
                    </a>
                </li>
                <li>
                    <a href="reward-page-vol.php">
                        <span class="ti-gift"></span>
                        <span>My Rewards</span>
                    </a>
                </li>
                <li>
                    <a href="volunteer-profile.php">
                        <span class="ti-user"></span>
                        <span>My Account</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" placeholder="Search">
            </div>

            <div class="social-icon">
                <span class="ti-bell"></span>
                <div></div>
            </div>
        </header>

        <main>
            <h2 class="dash-title">Start your Contribution today</h2>
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-package
                        "></span>
                        <div>
                            <h5> Total Contributions</h5>
                            <h4> 153 </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View all</a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-truck"></span>
                        <div>
                            <h5> Pending</h5>
                            <h4> 15</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View all</a>
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-check-box"></span>
                        <div>
                            <h5>Successfully delivered</h5>
                            <h4> 138</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View all</a>
                    </div>
                </div>
            </div>

            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                     <h3>Latest Task</h3>   
                     <div class="table-responsive">
      
<?php
 // Attempt select query execution
      
       $sql="SELECT don_ID, don_cat, don_quantity, don_date, don_time, don_add1, don_add2, don_city, don_postal FROM latest_task";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Donation_ID</th>";
                echo "<th>Donation Type</th>";
                echo "<th>Donation Quantity</th>";
                echo "<th>Date</th>";
                echo "<th>Time</th>";
                echo "<th>Address</th>";
                echo "<th></th>";
                echo "<th>Postal Code</th>";
                echo "<th>City</th>";
                echo "<th></th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['don_ID'] . "</td>";
                echo "<td>" . $row['don_cat'] . "</td>";
                echo "<td>" . $row['don_quantity'] . "</td>";
                echo "<td>" . $row['don_date'] . "</td>";
                echo "<td>" . $row['don_time'] . "</td>";
                echo "<td>" . $row['don_add1'] . "</td>";
                echo "<td>" . $row['don_add2'] . "</td>";
                echo "<td>" . $row['don_postal'] . "</td>";
                echo "<td>" . $row['don_city'] . "</td>";
                echo '<td>';
                echo '<button type="button" class="btn btn-default" id="generate">Receive Task</button>';
                echo '';
                echo '<!-- The Modal -->';
                echo '<div id="myModal" class="modal">';
                echo '';
                echo '<!-- Modal content -->';
                echo '<div class="modal-content">';
                echo '<span class="close">&times;</span>';
                echo '<div class="text-center">';
                echo '<img class="qr-code" img-thumbnail img-responsive">';
                echo '</div>';
                echo '<p>Snap a picture of the QR code and scan it with the DonateMate QRscanner to fill in the Delivery Form.</p>';
                echo '<p>Thank you!</p>';
                echo '</div>';
                echo '';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</td>';
                            
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
?>
 
                      
                    </div>
   
                    </div>
                    
                   
                </div>
            </section>
        </main>
    </div>

</body>
<script>
    // Get the modal
  var modal = document.getElementById("myModal");
  
  // Get the button that opens the modal
  var btn = document.getElementById("generate");
  
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
  function htmlEncode (value){
    return $('<div/>').text(value).html();
  }
  
  $(function() {
    $("#generate").click(function() {
      $(".qr-code").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + 
      htmlEncode("http://localhost/web/Qrscanner/deliveryform/deliveryform.php") + "&chs=160x160&chld=L|0");
    });
  });
  
  </script>

</html>