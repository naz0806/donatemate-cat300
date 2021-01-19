<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css">
    <link href="css/style-user-profile.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">

</head>
<body>
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
          <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#" target="_blank">My Account</a>
            <!-- Form -->
            <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
              <div class="form-group mb-0">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                  </div>
                  <input class="form-control" placeholder="Search" type="text">
                </div>
              </div>
            </form>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                      <img alt="Image placeholder" src="../images/profile-pic.png">
                    </span>
                    <div class="media-body ml-2 d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold">Adam Daniel</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                  <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                  </div>
                  <!-- <a href="../examples/profile.html" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                  </a>
                  <a href="../examples/profile.html" class="dropdown-item">
                    <i class="ni ni-settings-gear-65"></i>
                    <span>Settings</span>
                  </a>
                  <a href="../examples/profile.html" class="dropdown-item">
                    <i class="ni ni-calendar-grid-58"></i>
                    <span>Activity</span>
                  </a>
                  <a href="../examples/profile.html" class="dropdown-item">
                    <i class="ni ni-support-16"></i>
                    <span>Support</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#!" class="dropdown-item">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                  </a> -->
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../images/background-profile.png); 
        background-size: cover; background-position: center top;">
          <!-- Mask -->
          <span class="mask bg-gradient-default opacity-8"></span>
          <!-- Header container -->
          <div class="container-fluid d-flex align-items-center">
            <div class="row">
              <div class="col-lg-7 col-md-10">
                <h1 class="display-2 text-white">Hello Adam!</h1>
                <p class="text-white mt-0 mb-5">Welcome to your profile page. Let's check your progress in giving donations or update your profile for us to get to know you better.</p>
                <button id="btn-edit" class="btn btn-info">Edit profile</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
          <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
              <div class="card card-profile shadow">
                <div class="row justify-content-center">
                  <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                      <a href="#">
                        <img src="../images/profile-pic.png" class="rounded-circle" style="width:200px">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                  <div class="d-flex justify-content-between">
                    <a href="donation-page.html" class="btn btn-sm btn-info mr-4">Donate</a>
                    <a href="reward-page.html" class="btn btn-sm btn-default float-right">Rewards</a>
                  </div>
                </div>
                <div class="card-body pt-0 pt-md-4">
                  <div class="row">
                    <div class="col">
                      <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                        <div>
                          <span class="heading">4</span>
                          <span class="description">Donations</span>
                        </div>
                        <div>
                          <span class="heading">2</span>
                          <span class="description">Rewards</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <h3>
                      Adam Daniel<span class="font-weight-light">, 21</span>
                    </h3>
                    <div class="h5 font-weight-300">
                      <i class="ni location_pin mr-2"></i>Bayan Lepas, Pulau Pinang
                    </div>
                    <hr class="my-4">
                    <p>Donation make me feels like I am sharing my happiness with others. It makes me feel better.</p>
                    <a href="donor-dash-page.php">My Dashboard</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 order-xl-1">
              <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h3 class="mb-0">My Account</h3>
                    </div>
                    <div class="col-4 text-right">
                      <a href="#!" class="btn btn-sm btn-primary">Save</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <form>
                    <h6 class="heading-small text-muted mb-4">User information</h6>
                    <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-firstname">First Name</label>
                            <input type="text" id="input-firstname" class="form-control form-control-alternative" placeholder="First name" value="Adam" readonly="readonly">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-lastname">Last Name</label>
                            <input type="text" id="input-lastname" class="form-control form-control-alternative" placeholder="Last name" value="Daniel" readonly="readonly">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-contact-number">Contact Number</label>
                            <input type="text" id="input-contact-number" class="form-control form-control-alternative" placeholder="Contact Number" value="0123456789" readonly="readonly">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-email">Email Address</label>
                            <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="example@email.com" value="adamdaniel@gmail.com" readonly="readonly">
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-4">
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Contact information</h6>
                    <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-address1">Address Line 1</label>
                            <input id="input-address1" class="form-control form-control-alternative" placeholder="Home Address" value="12, Jalan Anggerik 3" type="text" readonly="readonly">
                          </div>
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-address2">Address Line 2</label>
                            <input id="input-address2" class="form-control form-control-alternative" placeholder="Home Address" value="Taman Melati" type="text" readonly="readonly">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-city">City</label>
                            <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="George Town" readonly="readonly">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-country">State</label>
                            <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="State" value="Pulau Pinang" readonly="readonly">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label" for="input-country">Postal code</label>
                            <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code" value="11900" readonly="readonly">
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-4">
                    <!-- Description -->
                    <h6 class="heading-small text-muted mb-4">About me</h6>
                    <div class="pl-lg-4">
                      <div class="form-group focused">
                        <label>About Me</label>
                        <textarea readonly="readonly rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">A young soul with a beautiful heart inside and a handsome face outside.</textarea>
                      </div>
                    </div>
                  </form>
                  <!-- <script>
                    var button = document.getElementById('btn-edit')
                    button.onclick = editProfile(){
                      this.removeAttribute('readonly');
                    };
                  </script> -->
                </div>
              </div>
            </div>
          </div>
        </div>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
    
</body>
</html>