<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
    <title>Charity Organization Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style-user-dashboard.css">
    <script src="js/donor.js"></script>


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
                    <a href="charity-homepage.php">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="charity-profile-page.php">
                        <span class="ti-user"></span>
                        <span>Account</span>
                    </a>
                </li>
                <li>
                    <a href="charity-history-page.php">
                        <span class="ti-gift"></span>
                        <span>History</span>
                    </a>
                </li>
                <li>
                    <a href="requirement-form.php">
                        <span class="ti-package"></span>
                        <span>Add Requirement</span>
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
            <h2 class="dash-title">Overview</h2>
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-package "></span>
                        <div>
                            <h5> Total Donation</h5>
                            <h4> 5</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!-- <a href="donation-page.html">View all</a> -->
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-truck"></span>
                        <div>
                            <h5> Pending</h5>
                            <h4> 1</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!-- <a href="donation-page.html">View all</a> -->
                    </div>
                </div>
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-check-box"></span>
                        <div>
                            <h5> Donation Received</h5>
                            <h4> 5</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!-- <a href="donation-page.html">View all</a> -->
                    </div>
                </div>
            </div>

            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Latest Donation History</h3>

                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Date Donated</th>
                                        <th>Donor's Name</th>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>13-11-2020</td>
                                        <td>Nuraina Zafirah</td>
                                        <td>Clothes</td>
                                        <td>10</td>
                                        <td>
                                            <span class="badge warning">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20-10-2020</td>
                                        <td>Lee Dong Wook</td>
                                        <td>Books</td>
                                        <td>15</td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05-08-2020</td>
                                        <td>Afiqah Umairah Bt Mohd Azni</td>
                                        <td>Face Mask</td>
                                        <td>50</td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12-07-2020</td>
                                        <td>Amelia Ng</td>
                                        <td>Packaged foods</td>
                                        <td>50</td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11-06-2020</td>
                                        <td>Nur Hazwani Abdul Majeed</td>
                                        <td>Clothes</td>
                                        <td>20</td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>08-05-2020</td>
                                        <td>Bella Jung</td>
                                        <td>Hand Sanitizer</td>
                                        <td>50</td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        
                    </div>
                    <div class="share">
                        <div class="share-card">
                            <div class="share-single">
                                <div>
                                    <div>
                                        <h5>Sharing is Caring</h5>
                                        <p>The best way to multiply your happiness is to share it with others.</p>
                                    </div>
                                    <!-- will change this link soon -->
                                    <a href="#"></a>
                                    
                                </div>
                            </div> 
                        </div>
                            <div class="volunteer-card">
                                <div class="volunteer-flex">
                                    <div class="volunteer-img"></div>
                                    <div class="volunteer-info">
                                        <h5>Kim Seon Ho</h5>
                                        <small>Will send your upcoming donation today</small>
                                    </div>
                                </div> 

                                <!-- message box -->
                                <div class="text-center">
                                    <button onclick="document.getElementById('modal-wrapper').style.display='block'">
                                        <span class="ti-email"></span>
                                         Leave a message
                                    </button>

                                    <div id="modal-wrapper" class="modal">

                                        <form class="modal-content animate" action="#">
                                            <div class="imgcontainer">
                                                <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                                <img src="images/volunteer-profile.jpg" alt="Avatar" class="avatar">
                                                <h1 style="text-align:center">Leave a message</h1>
                                            </div>
                                            
                                            <div class="container">
                                                <textarea id="chat" placeholder=" Type message here..." name="msg" required></textarea><br>
                                                <button type="submit" onclick="mySubmit()">Send</button>
                                            
                                            </div>
                                            
                                        </form>
                                            
                                    </div>
                                </div>
                           

                               

                            </div>    
                    </div>
                </div>
            </section>
        </main>
    </div>
    
    <script>
        // If user clicks anywhere outside of the modal, Modal will close
        
        var modal = document.getElementById('modal-wrapper');
        window.onclick = function(event) {
            if (event.target == modal) {
            modal.style.display = "none";
            }
        }
    </script>

</body>
</html>
