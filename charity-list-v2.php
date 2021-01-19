<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity List</title>
    <link rel="stylesheet" href="css/style.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@500&family=Montserrat&family=Mulish:wght@300&family=Playfair+Display&family=Poppins:wght@700&family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
  
    <div class="container"> 

    <nav>
    <div class="logo">
        <h4>DonateMate</h4>
    </div>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="search-engine.php">Search Page</a></li>
    </ul>
    </nav>

    <header class="header2">
      <div class="list-banner">
      <h1>Charity Organization List</h1>
      <p>You don't necessarily need to donate money to make a bigger differences. 
        Here are some charity organizations that provide alternatives ways based on their needs & causes!</p>
      </div>
    </header>

      <section id="donations" class="donations py-5">
        <div class="container">
             <!-- Section Title -->
             <div class="row">
     
            </div>
            <!-- End of Section Title -->

            
            <div class="grid">
                <div class="grid-item">
                  <div class="card">
                    <img class="card-img" src="images/portfolio-1.jpg" alt="Rumah Kasih Harmoni" />
                    <div class="card-content">
                      <h1 class="card-header">Rumah Kasih Harmoni</h1>
                      <p class="card-text">
                        Rumah Kasih Harmoni takes care of orphans in the vicinity of the town who are brought to the orphanage facility. The orphanage provide shelter, feeding, healthcare and education at no cost to children. </p>
                      <p>Target: Dry Foods, Clothes</p><br>
                      <a href="donation-form.php"><button class="card-btn">Donate Now</button></a>
                      <a href="../homepage/test.html"><button class="card-btn">More Info</button></a>                 
                    </div>
                  </div>
                </div>

                <div class="grid-item">
                  <div class="card">
                    <img
                      class="card-img"
                      src="images/portfolio-2.jpg"
                      alt="Pusat Jagaan Nurul Iman"/>
                    <div class="card-content">
                      <h1 class="card-header">Pusat Jagaan Nurul Iman</h1>
                      <p class="card-text">
                        This organization help the abandoned children getting food, shelter & education, and aims to provide educational materials, notebooks, geometry boxes, scales and sketch pens for drawing and academics. Help them grow further! </p>
                      <p>Target: Food, Education Materials</p><br>
                      <a href="donation-form.php"><button class="card-btn">Donate Now</button></a>
                    </div>
                  </div>
                </div>

                <div class="grid-item">
                  <div class="card">
                    <img class="card-img" src="images/portfolio-3.jpg" alt="Society of the Disabled Persons" />
                    <div class="card-content">
                      <h1 class="card-header">Society of the Disabled Persons</h1>
                      <p class="card-text">
                       The society aims to provide life changing care to physically disabled children by helping develop a treatment plan, locate services needed with partners and service providers to secure treatment free or at a reduced cost.  </p>
                      <p>Target: General Funds, Medical Services & Supplies</p><br>
                      <a href="donation-form.php"><button class="card-btn">Donate Now</button></a>
                    </div>
                  </div>
                </div>

                <div class="grid-item">
                    <div class="card">
                      <img class="card-img" src="images/portfolio-4.jpg" alt="Penang Happy Home" />
                      <div class="card-content">
                        <h1 class="card-header">Penang Happy Home</h1>
                        <p class="card-text">
                          <p class="card-text">
                            This project will provide funding so that the PHH can invest in each child's future through a safe home, nutritious food, quality education, health care, and enriching activities. With your support, HFF will care for the children in its care until they grow into tomorrow's leaders! </p>
                          <p>Target: Education Supplies, General Funds </p><br>
                          <a href="donation-form.php"><button class="card-btn">Donate Now</button></a>
                      </div>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="card">
                      <img class="card-img" src="images/portfolio-5.jpg" alt="Persatuan Kebajikan Hop" />
                      <div class="card-content">
                        <h1 class="card-header">Persatuan Kebajikan Hope</h1>
                        <p class="card-text">
                          <p class="card-text">
                            Our vision is to help the urban poor families & marginalized community through community programs that focus on five core areas: Health, Food, Education, Volunteerism and Corporate Shared Values. </p>
                            Target: Medical Funds, Sponsorship, General Funds</p><br>
                          <a href="donation-form.php"><button class="card-btn">Donate Now</button></a>
                      </div>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="card">
                      <img class="card-img" src="images/portfolio-6.jpg" alt="Rumah Orang Tua Jubli Perak" />
                      <div class="card-content">
                        <h1 class="card-header">Rumah Orang Tua Jubli Perak</h1>
                        <p class="card-text">
                          <p class="card-text">
                            The organization stepped in to help neglected aged persons that suffers from ill-health or left isolated by their family & community by providing shelter with food, clothes, medicine, recreation and accommodation.  </p>
                          <p>Target: New Clothes, Medicine, Dry Foods</p><br>
                          <a href="donation-form.php"><button class="card-btn">Donate Now</button></a>
                      </div>
                    </div>
                  </div>

              </div>

    </section>
           


  
       <!---chatbots-->
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
          </div> <!--body container-->
        


       

  

</body>

</html>

<!---->
