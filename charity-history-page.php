<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
    <title>Charity Organization Dashboard</title>
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
                    <a href="charity-dash-page.php">
                        <span class="ti-home"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="donor-profile-page.php">
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
                        <span>Edit Requirement</span>
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
                            Received Donations History
                        </h1>
                        
                    </div>
                </div>
                <!-- End of Section Title -->
                <div class="activity-card">
                    <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Date Received</th>
                                <th>Donor's Name</th>
                                <th>Donor's Phone No.</th>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Volunteer's Name</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>09-01-2021</td>
                                <td>Nuraina Zafirah</td>
                                <td>013-4455123</td>
                                <td>Clothes</td>
                                <td>10</td>
                                <td>Kim Seon Ho</td>
                                <td>
                                    <span class="badge warning">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>20-12-2020</td>
                                <td>Lee Dong Wook</td>
                                <td>013-4455123</td>
                                <td>Books</td>
                                <td>15</td>
                                <td>Kim Seon Ho</td>
                                <td>
                                    <span class="badge warning">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>06-12-2020</td>
                                <td>Afiqah Umairah Bt Mohd Azni</td>
                                <td>013-4455123</td>
                                <td>Face Mask</td>
                                <td>50</td>
                                <td>Zhang Wei</td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                            <tr>
                                <td>29-11-2020</td>
                                <td>Amelia Ng</td>
                                <td>013-4455123</td>
                                <td>Packaged foods</td>
                                <td>50</td>
                                <td>Kim Seon Ho</td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                            <tr>
                                <td>11-11-2020</td>
                                <td>Nur Hazwani Abdul Majeed</td>
                                <td>013-4455123</td>
                                <td>Clothes</td>
                                <td>20</td>
                                <td>Zhang Wei</td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                            <tr>
                                <td>13-10-2020</td>
                                <td>Bella Jung</td>
                                <td>013-4455123</td>
                                <td>Hand Sanitizer</td>
                                <td>50</td>
                                <td>Ali Ahmad</td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                            <tr>
                                <td>13-10-2020</td>
                                <td>Alex Turner</td>
                                <td>019-3654782</td>
                                <td>Dry Foods</td>
                                <td>80</td>
                                <td>Ali Ahmad</td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                            <tr>
                                <td>20-07-2020</td>
                                <td>Han Seo Jun</td>
                                <td>013-4758921</td>
                                <td>Books</td>
                                <td>35</td>
                                <td>Ali Ahmad</td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                            <tr>
                                <td>05-07-2020</td>
                                <td>Qaisara Izzaty</td>
                                <td>013-5841445</td>
                                <td>Face Mask</td>
                                <td>100</td>
                                <td>Kim Seon Ho</td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                            <tr>
                                <td>12-06-2020</td>
                                <td>Zoe Sugg</td>
                                <td>013-1425369</td>
                                <td>Clothes</td>
                                <td>26</td>
                                <td>Zhang Wei</td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                            <tr>
                                <td>13-05-2020</td>
                                <td>Amber Xiu</td>
                                <td>012-7892536</td>
                                <td>Art Supplies</td>
                                <td>20</td>
                                <td>Zhang Wei</td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                            <tr>
                                <td>08-05-2020</td>
                                <td>Krystal Jung</td>
                                <td>011-5045679</td>
                                <td>Hand Sanitizer</td>
                                <td>30</td>
                                <td>Ali Ahmad</td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            

                
            </div>
        </section>

       
       
    </div>

</body>
</html>