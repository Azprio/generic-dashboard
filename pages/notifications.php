<?php
include('./header_menu_left.php');
$notification_query=$obj_tank->select_all_notifications();
?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Notifications</a>
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
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h3 class="card-title">Notifications</h3>
                        </div>
                        
                        <div class="card-body">

                            <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                
                                                <th style="text-align:center">
                                                    Device ID
                                                </th>
                                                <th style="text-align:center">
                                                    Notification
                                                </th>
                                                <th style="text-align:center">
                                                    Time
                                                </th>
                                                
                                            </thead>
                                            <tbody>
                                            <?php while ($tank_notification = mysqli_fetch_assoc($notification_query)) { ?>
                                                
                                                <tr >
                                                    <td style="text-align:center">
                                                    <?php echo $tank_notification['device_id']; ?>
                                                    </td>
                                                    <?php if($tank_notification['seen']=='0'){ ?>

                                                            <?php if($tank_notification['danger']=='1'){ ?>
                                                    <td style="text-align:center" class='alert alert-danger'>
                                                    <a  href="notification-details.php?device_id=<?php echo $tank_notification['device_id'];?>&&notification_id=<?php echo $tank_notification['notification_id'];?>">
                                                    <?php echo $tank_notification['notification']; ?>
                                                    </a>
                                                    </td>
                                                        <?php }else{ ?>
                                                    <td style="text-align:center" class='alert alert-success'>
                                                    <a  href="notification-details.php?device_id=<?php echo $tank_notification['device_id'];?>&&notification_id=<?php echo $tank_notification['notification_id'];?>">
                                                    <?php echo $tank_notification['notification']; ?>
                                                    </a>
                                                    </td>
                                                        <?php } ?>
                                                        <?php }else{ ?>
                                                    <?php if($tank_notification['danger']=='1'){ ?>
                                                    <td style="text-align:center;" class='alert alert-danger'>
                                                    <a  href="notification-details.php?device_id=<?php echo $tank_notification['device_id'];?>&&notification_id=<?php echo $tank_notification['notification_id'];?>">
                                                    <?php echo $tank_notification['notification']; ?>
                                                    </a>
                                                    </td>
                                                        <?php }else{ ?>
                                                    <td style="text-align:center">
                                                    <a  href="notification-details.php?device_id=<?php echo $tank_notification['device_id'];?>&&notification_id=<?php echo $tank_notification['notification_id'];?>">
                                                    <?php echo $tank_notification['notification']; ?>
                                                    </a>
                                                    </td>
                                                    <?php } ?>
                                                    <?php } ?>
                                                    <td style="text-align:center">
                                                    <?php echo $tank_notification['notification_time']; ?>
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