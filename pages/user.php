<?php
$page_name = 'user';
include('./header_menu_left.php');

if(isset($_POST['btn'])){
    $message=$obj_tank->insert_user_details($_POST);
}

?>
        <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">User Profile</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <?php
                                include './notification_list.php';
                            ?>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
          
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                    <?php if(isset($message)){?> <div class="alert alert-success"><h4> <?php echo $message; ?> </h4></div> <?php }?>
                <form action="" method="post">
                <div class="row">

<div class="col-md-6">
    <div class="form-group">
        <label class="bmd-label-floating">Username</label>
        <input type="text" class="form-control" name="username" required>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label class="bmd-label-floating">Email address</label>
        <input type="email" class="form-control" name="email" required>
    </div>
</div>
</div>
<div class="row">
<div class="col-md-6">
    <div class="form-group">
        <label class="bmd-label-floating">Fist Name</label>
        <input type="text" class="form-control" name="firstname" required>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label class="bmd-label-floating">Last Name</label>
        <input type="text" class="form-control" name="lastname" required>
    </div>
</div>
</div>
<div class="row">
<div class="col-md-12">
    <div class="form-group">
        <label class="bmd-label-floating">Adress</label>
        <input type="text" class="form-control" name="address" required>
    </div>
</div>
</div>
<div class="row">
<div class="col-md-4">
    <div class="form-group">
        <label class="bmd-label-floating">City</label>
        <input type="text" class="form-control" name="city" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="bmd-label-floating">Country</label>
        <input type="text" class="form-control" name="country"required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="bmd-label-floating">Postal Code</label>
        <input type="text" class="form-control" name="postal"required>
    </div>
</div>
</div>
<div class="row">
<div class="col-md-4">
    <div class="form-group">
        <label class="bmd-label-floating">Device Id</label>
        <input type="text" class="form-control" name="deviceId" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="bmd-label-floating">Phone Number</label>
        <input type="text" class="form-control" name="phoneNumber"required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="bmd-label-floating">Password</label>
        <input type="password" class="form-control" name="password"required>
    </div>
</div>
</div>
                    <button type="submit" name="btn" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
include('./footer.php');
?>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>