<?php
$page_name = 'user_list';
include('./header_menu_left.php');
?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">User Details</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
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
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <?php
                                include './notification_list.php';
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">person</i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">User List</h4>
                                    <p class="card-category"> This Table Contains Registered User Information</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th style="text-align:center">
                                                    ID
                                                </th>
                                                <th style="text-align:center">
                                                    User Name
                                                </th>
                                                <th style="text-align:center">
                                                    Email
                                                </th>
                                                <th style="text-align:center">
                                                    First Name
                                                </th>
                                                <th style="text-align:center">
                                                    Last Name
                                                </th>
                                                <th style="text-align:center">
                                                    Address
                                                </th>
                                                <th style="text-align:center">
                                                    City
                                                </th>
                                                <th style="text-align:center">
                                                    Country
                                                </th>
                                                <th style="text-align:center">
                                                    Postal Code
                                                </th>
                                                <th style="text-align:center">
                                                    Device ID
                                                </th>
                                                <th style="text-align:center">
                                                    Phone Number
                                                </th>
                                                
                                            </thead>
                                            <tbody>
                                                <?php while ($user_info = mysqli_fetch_assoc($query_result1)) { ?>
                                                <tr>
                                                  <td style="text-align:center">
                                                    <?php echo $user_info['id']; ?>
                                                  </td>
                                                  <td style="text-align:center">
                                                    <?php echo $user_info['username']; ?>
                                                  </td>
                                                  <td style="text-align:center">
                                                    <?php echo $user_info['email']; ?>
                                                  </td>
                                                  <td style="text-align:center">
                                                    <?php echo $user_info['firstname']; ?>
                                                  </td>
                                                  <td style="text-align:center">
                                                    <?php echo $user_info['lastname']; ?>
                                                  </td>
                                                  <td style="text-align:center">
                                                    <?php echo $user_info['address']; ?>
                                                  </td>
                                                  <td style="text-align:center">
                                                    <?php echo $user_info['city']; ?>
                                                  </td>
                                                  <td style="text-align:center">
                                                    <?php echo $user_info['country']; ?>
                                                  </td>
                                                  <td style="text-align:center">
                                                    <?php echo $user_info['postal']; ?>
                                                  </td>
                                                  <td style="text-align:center">
                                                    <?php echo $user_info['deviceId']; ?>
                                                  </td>
                                                  <td style="text-align:center">
                                                    <?php echo $user_info['phoneNumber']; ?>
                                                  </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            



            <?php
include './footer.php';
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