<?php
include('./header_menu_left.php');
?>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Upgrade to PRO</a>
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
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
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
            <div class="col-md-8 ml-auto mr-auto">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Material Dashboard PRO</h4>
                  <p class="card-category">Are you looking for more components? Please check our Premium Version of Material Dashboard.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-upgrade">
                    <table class="table">
                      <thead>
                        <tr>
                          <th></th>
                          <th class="text-center">Free</th>
                          <th class="text-center">PRO</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Components</td>
                          <td class="text-center">60</td>
                          <td class="text-center">200</td>
                        </tr>
                        <tr>
                          <td>Plugins</td>
                          <td class="text-center">2</td>
                          <td class="text-center">15</td>
                        </tr>
                        <tr>
                          <td>Example Pages</td>
                          <td class="text-center">3</td>
                          <td class="text-center">27</td>
                        </tr>
                        <tr>
                          <td>Login, Register, Pricing, Lock Pages</td>
                          <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                          <td class="text-center"><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                          <td>DataTables, VectorMap, SweetAlert, Wizard, jQueryValidation, FullCalendar etc...</td>
                          <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                          <td class="text-center"><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                          <td>Mini Sidebar</td>
                          <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                          <td class="text-center"><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                          <td>Premium Support</td>
                          <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                          <td class="text-center"><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td class="text-center">Free</td>
                          <td class="text-center">Just $49</td>
                        </tr>
                        <tr>
                          <td class="text-center"></td>
                          <td class="text-center">
                            <a href="#" class="btn btn-round btn-fill btn-default disabled">Current Version</a>
                          </td>
                          <td class="text-center">
                            <a target="_blank" href="http://www.creative-tim.com/product/material-dashboard-pro/?ref=md-free-upgrade-live" class="btn btn-round btn-fill btn-info">Upgrade to PRO</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
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