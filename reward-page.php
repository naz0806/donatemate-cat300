<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
    <title>My Donations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

    <link rel="stylesheet" href="css/style-user-dashboard.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/322df8f33b.js" crossorigin="anonymous"></script>
</head>
<body>

    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span>DonateMate</span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="donor-homepage.php">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="donation-page.php">
                        <span class="ti-package"></span>
                        <span>Donations</span>
                    </a>
                </li>
                <li>
                    <a href="reward-page.php">
                        <span class="ti-gift"></span>
                        <span>Rewards</span>
                    </a>
                </li>
                <li>
                    <a href="donor-profile-page.php">
                        <span class="ti-user"></span>
                        <span>Account</span>
                    </a>
                </li>
                <li>
                    <a href="charity-list-v2.php">
                        <div class="text-center1">
                            <button>
                                Donate Now
                            </button>
                        </div>
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
        <!-- List of Donations -->
        <section id="rewards" class="rewards py-5">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="col-5 mx-auto col-sm-3 text-center">
                        <h1 class="text-capitalize reward-title">
                            my rewards
                        </h1>
                        
                    </div>
                </div>
                <!-- End of Section Title -->
                <!--Donations Items-->
                <div class="row reward-items" id="reward-items">
                    <!--Single-Items-->
                    <div class="col-5 col-sm-3 col-lg-2 mx-3 my-3">
                        <div class="card single-item-rew">
                            <div class="img-container-rew">
                                <img src="images/gift-box.png" alt=""
                                class="card-img-top reward-img">
                                <button class="btn-reward px-3 py-2">Redeem</button>
                            </div>
                            <div class="card-body-reward">
                                <div class="card-text-rew text-uppercase">
                                    <h5 id="reward-name">Donate In Honor</h5>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!--End of Single-items-->

                    <!--Single-Items-->
                    <div class="col-5 col-sm-3 col-lg-2 mx-3 my-3">
                        <div class="card single-item-rew">
                            <div class="img-container-rew">
                                <img src="images/gift-box.png" alt=""
                                class="card-img-top reward-img">
                                <button class="btn-reward px-3 py-2">Redeem</button>
                            </div>
                            <div class="card-body-reward">
                                <div class="card-text-rew text-uppercase">
                                    <h5 id="reward-name">Donate In Honor</h5>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!--End of Single-items-->

                   
                </div>
                <!--End of Donations items-->
            </div>
        </section>

       
       
    </div>

</body>
</html>
