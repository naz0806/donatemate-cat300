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
                    <a href="index.php">
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
        <section id="donations" class="donations py-5">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="col-10 mx-auto col-sm-5 text-center">
                        <h1 class="text-capitalize donation-title">
                            my donations
                        </h1>
                        
                    </div>
                </div>
                <!-- End of Section Title -->
                <!--Donations Items-->
                <div class="row donation-items" id="donation-items">
                    <!--Single-Items-->
                    <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                        <div class="card single-item">
                            <div class="img-container">
                                <img src="../images/portfolio-1.jpg" alt=""
                                class="card-img-top donation-img">
                            </div>
                            <div class="card-body-don">
                                <div class="card-text-don text-capitalize">
                                    <h5 id="donation-name">Rumah Kasih Harmoni</h5>
                                </div>
                                <div class="card-text-desc d-flex justify-content-between">
                                    <p>Category</p>
                                    <span><i class="fas fa-tshirt"></i></span>
                                </div>
                                <div class="card-text-desc d-flex justify-content-between">
                                    <p>Date Donated</p>
                                    <span>13-11-2020</span>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!--End of Single-items-->

                    <!--Single-Items-->
                    <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                        <div class="card single-item">
                            <div class="img-container">
                                <img src="../images/portfolio-2.jpg" alt=""
                                class="card-img-top donation-img">
                            </div>
                            <div class="card-body-don">
                                <div class="card-text-don text-capitalize">
                                    <h5 id="donation-name">Pusat Jagaan Nurul Iman</h5>
                                </div>
                                <div class="card-text-desc d-flex justify-content-between">
                                    <p>Category</p>
                                    <span><i class="fas fa-book"></i></span>
                                </div>
                                <div class="card-text-desc d-flex justify-content-between">
                                    <p>Date Donated</p>
                                    <span>20-10-2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Single-items-->

                    <!--Single-Items-->
                    <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                        <div class="card single-item">
                            <div class="img-container">
                                <img src="../images/portfolio-3.jpg" alt=""
                                class="card-img-top donation-img">
                            </div>
                            <div class="card-body-don">
                                <div class="card-text-don text-capitalize">
                                    <h5 id="donation-name">Society of the Disabled Persons</h5> 
                                </div>
                                <div class="card-text-desc d-flex justify-content-between">
                                    <p>Category</p>
                                    <span><i class="fas fa-first-aid"></i></span>
                                </div>
                                <div class="card-text-desc d-flex justify-content-between">
                                    <p>Date Donated</p>
                                    <span>05-08-2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Single-items-->

                    <!--Single-Items-->
                    <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                        <div class="card single-item">
                            <div class="img-container">
                                <img src="../images/portfolio-4.jpg" alt=""
                                class="card-img-top donation-img">
                            </div>
                            <div class="card-body-don">
                                <div class="card-text-don text-capitalize">
                                    <h5 id="donation-name">Penang Happy Home</h5>
                                </div>
                                <div class="card-text-desc d-flex justify-content-between">
                                    <p>Category</p>
                                    <span><i class="fas fa-utensils"></i></span>
                                </div>
                                <div class="card-text-desc d-flex justify-content-between">
                                    <p>Date Donated</p>
                                    <span>12-07-2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Single-items-->

                    <!--Single-Items-->
                    <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                        <div class="card single-item">
                            <div class="img-container">
                                <img src="../images/portfolio-5.jpg" alt=""
                                class="card-img-top donation-img">
                            </div>
                            <div class="card-body-don">
                                <div class="card-text-don text-capitalize">
                                    <h5 id="donation-name">Persatuan Kebajikan Hope</h5>
                                </div>
                                <div class="card-text-desc d-flex justify-content-between">
                                    <p>Category</p>
                                    <span><i class="fas fa-tshirt"></i></span>
                                </div>
                                <div class="card-text-desc d-flex justify-content-between">
                                    <p>Date Donated</p>
                                    <span>11-06-2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Single-items-->

                     <!--Single-Items-->
                     <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                        <div class="card single-item">
                            <div class="img-container">
                                <img src="../images/portfolio-6.jpg" alt=""
                                class="card-img-top donation-img">
                            </div>
                            <div class="card-body-don">
                                <div class="card-text-don text-capitalize">
                                    <h5 id="donation-name">Rumah Orang Tua Jubli Perak</h5>
                                </div>
                                <div class="card-text-desc d-flex justify-content-between">
                                    <p>Category</p>
                                    <span><i class="fas fa-first-aid"></i></span>
                                </div>
                                <div class="card-text-desc d-flex justify-content-between">
                                    <p>Date Donated</p>
                                    <span>08-05-2020</span>
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