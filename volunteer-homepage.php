<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Homepage</title>
    <link rel="stylesheet" href="css/style.css">
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
        
<header class="header">
  <div class="img-wrapper">
    <img src="images/volunteerhp.jpg">
    </div>
      <div class="banner">
        <h1>DonateMate</h1>
         <p>Welcome Back, Volunteers!</p>
         <a href="signIn.php"><button>Donate Now</button></a>
      </div>


</header>

<section class="sidebar">
  <ul class="menu">
    <li class="menu-item">
      <a href='search-engine.php' class="menu-link" data-content="Search">Search</a> 
    </li>
    <li class="menu-item">
      <a href="charity-list.php" class="menu-link" data-content="Charity List">Charity List</a>
    </li>
    <li class="menu-item">
        <a href="volunteer-dash.php" class="menu-link" data-content="Dashboard">Dashboard</a>
      </li>
      <li class="menu-item">
        <a href="volunteer-profile.php" class="menu-link" data-content="My Profile">My Profile</a>
      </li>
    <li class="menu-item">
      <a href="" class="menu-link" data-content="Log Out">Log Out</a>
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


<section id="sec">
  
  
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
  crossorigin="anonymous"></script>
<script src="js/tilt.js"></script>
</body>
</html>

<!---->