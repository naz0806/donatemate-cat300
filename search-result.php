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

<header class="header2">
       <h1> Search Result : </h1>
</header>

 <!--SIDEBAR-->
 <section class="sidebar">
        <ul class="menu">
          <li class="menu-item">
            <a href="index.php" class="menu-link" data-content="Home">Home</a>
          </li>
          <li class="menu-item">
            <a href="signIn.php" class="menu-link" data-content="Login">Login</a>

          </li>
          <li class="menu-item">
            <a href="signUp.php" class="menu-link" data-content="Sign Up">Sign Up</a>
          </li>
          <li class="menu-item">
            <a href="#contact" class="menu-link" data-content="Contact">Contact</a>
          </li>
        </ul>     
</section> 

<div class = "charityresult-container">
    <?php
        if (isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($link, $_POST['search']);
            $sql = "SELECT * FROM charity_list WHERE name LIKE '%$search%' OR location LIKE '%$search%' 
                    OR description LIKE '%$search%' OR requirement LIKE '%$search%' ";
            $result = mysqli_query($link, $sql);
            $queryResult = mysqli_num_rows($result);

            echo "<p class='result'> There are " . $queryResult. " results! </p>";

            if($queryResult > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<div class = 'charity-box'>
                    <h3>".$row['name']."</h3>
                    <h4>".$row['location']."</h4>
                    <h5>".$row['description']."</h5>
                    <p>".$row['requirement']."</p>
                  </div></a>";
                }
            } else{
                echo "<p class='noresult'> There are no results matching your search!  </p>";      
            }
        }
?>    
</div>

<!---footer-->
<footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6 m-auto text-center">
            <div class="copyright">
              <p>&copy;DonateMate</p>
            </div>
          </div>
        </div>
      </footer>
        
          <a href="#" class="scroll-btn">
            <i class="fas fa-arrow-up"></i>
          </a>

    <script src="js/script1.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <script src="js/tilt.js"></script>