<?php
  include ('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Charity Organizations</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/phpstyle.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@500&family=Montserrat&family=Mulish:wght@300&family=Playfair+Display&family=Poppins:wght@700&family=Roboto&display=swap" rel="stylesheet">


    
</head>
<body>

<div class="container"> 
        <div class="hamburger-menu">
          <div class="line line-1"></div>
          <div class="line line-2"></div>
          <div class="line line-3"></div>
         
          <span>Close</span>
        </div>

        <!-- HEADER + SEARCH BAR PLACE -->
        <header class="header">
        <form action = "search-result.php" method = "POST">
        <h1>Search Charity Organizations</h1>
        <div class="form-box">
          <input type="text" name="search" placeholder="Charity Organization...">
          <button type="submit" name="submit-search">Search</button>
        </div>
      </form>

     </header>

     

  <section id="sec-list">
    <!--SIDEBAR-->
    <section class="sidebar">
        <ul class="menu">
          <li class="menu-item">
            <a href="index.php" class="menu-link" data-content="Home">Home</a>
          </li>
          <li class="menu-item">
      <a href="charity-list.php" class="menu-link" data-content="Charity List">Charity List</a>
    </li>
          <li class="menu-item">
            <a href="signIn.php" class="menu-link" data-content="Login">Login</a>

          </li>
          <li class="menu-item">
            <a href="signUp.php" class="menu-link" data-content="Sign Up">Sign Up</a>
          </li>

      <!--QR SCANNER-->
      <div class="tooltip">
        <a href="qrscan.php">
        <img border="0" alt="Qrscanner" src="images/QR.png" class="qr">
        <span class="tooltiptext">DonateMate QRscanner</span>
        </a>
        </div>
        </ul>     
      </section> 

  </section>
      
  
       <!---CHATBOTS-->
       <button class="open-button" onclick="openForm()">Chat with Us!</button>
       <div class="chat-popup" id="myForm">
        <form  class="form-container" onsubmit="mySubmit()">
          <p id="chat">DonateMate Chat</p><br>
          <input type="email" id="chatt" class="email" name="email" placeholder="Type in your Email here" required><br>
          <textarea id="chatt" placeholder="Type message here..." name="msg" required></textarea>
          <input type="submit" class="btn" value="Send">
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>

    
</div> <!--body container-->


    <script src="js/script1.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <script src="js/tilt.js"></script>

</body>

</html>
