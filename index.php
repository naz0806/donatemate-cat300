<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DonateMate</title>
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
    <img src="images/together1.jpg">
    </div>
      <div class="banner">
        <h1>DonateMate</h1>
         <p>One stop donation centre in Penang.</p>
         <a href="signIn.php"><button>Donate Now</button></a>
         <a href="signUpInVolunteer.php"><button>Be a Volunteer</button></a>
      </div>

<a href="#sec">
  <div class="scroll-down"></div>
</a>
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
      <div class="dropdown">
        <a href="signIn.php" class="menu-link" id="dropbtn" data-content="Login">Login</a>
          <div class="dropdown-content">
            <a href="signIn.php">Donor</a>
            <a href="signIn.php">Charity Organization</a>
            <a href="signUpInVolunteer.php">Volunteer</a>
          </div> 
      </div>
       
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


<section id="sec">
  <!--ABOUT US SECTION-->
  <section class="about-section">
    <article>
      <h3>ABOUT US</h3>
        <p>
            DonateMate is an application system that manages charity donation systematically in place of the traditional way.
            Taking place in Penang, the system allows donors to distribute the donation either individually or by the registered
            distributors who are among the volunteers of DOMA. 
        </p>
    </article>
  </section>

  <!--MISSION SECTION -->
  <section class="mission-section">
    <article>
      <h3>OUR MISSION</h3>
        <p>
            Giving donations has become an effective way of helping each other out.
            The basic idea of this system is to ease people in making product donations through an online platform,
            and to encourage youngsters to get involved in donation without limitation.
        </p>
    </article>
  </section>

  <!--ARTICLE SECTION-->
  <section class="article">
    <div class="section-header">
      <h1 class="section-heading">RELATED ARTICLE</h1>
    </div>
  
   <div class="cards-wrapper">
      <div class="card" data-tilt>
        <div class="card-img-wrapper">
          <img src="images/A1.jpg"/></div>
        <div class="card-info">
          <h2>Apps of Goodwill</h2>
            <p>
                "Put your phone to work by giving back"</p>
          <button> 
          <a href="https://www.optionstheedge.com/topic/people/apps-goodwill-put-your-phone-work-giving-back">Read More</a></button>
        </div>
      </div>

      <div class="card" data-tilt>
        <div class="card-img-wrapper">
          <img src="images/A2.jpg" />
        </div>
        <div class="card-info">
          <h2>Families on the Edge</h2>
            <p>
                "Low-income families need continued support to recover from the effects of COVID-19"</p>
          <button> 
          <a href="https://www.unicef.org/malaysia/press-releases/families-edge-low-income-families-need-continued-support-recover-effects-covid-19">Read More</a></button>
         </div>
      </div>

      <div class="card" data-tilt>
        <div class="card-img-wrapper">
          <img src="images/A3.jpeg"/>
        </div>
        <div class="card-info">
          <h2>Adopt an Animal</h2>
            <p>
                "Malaysia's largest zoo under financial strain due to COVID-19 restrictions"</p>
          <button> 
          <a href="https://news.cgtn.com/news/2020-12-14/Malaysia-s-largest-zoo-under-financial-strain-from-COVID-19-WddTp4ZvBm/index.html">Read More</a></button>
        </div>
      </div>
    </div>
</section>

 <!--CONTACT-->
<section class="contact" id="contact">
  <div class="contact-wrapper">
    <div class="contact-left"></div>
       <div class="contact-right">
        <h1 class="contact-heading">Drop Your Feedback</h1>
          <form>
            <div class="input-group">
              <input type="Name" class="field" />
              <label class="input-label">Full Name</label>
            </div>
            <div class="input-group">
              <input type="email" class="field" />
              <label class="input-label">Email</label>
            </div>
            <div class="input-group">
              <textarea class="field"></textarea>
              <label class="message">Message</label>
            </div>
              <input type="submit" class="submit-btn" value="Submit" />
          </form>
       </div>
   </div>
</section>
</section>  <!--END OF ID SEC-->
  
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

<!---FOOTER-->
<footer class="footer">
  <div class="footer-content">
    <p class="copyright">
      @DonateMate - All Rights Reserved</p>
  </div>
</footer>

<a href="#" class="scroll-btn">
  <i class="fas fa-arrow-up"></i></a>

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