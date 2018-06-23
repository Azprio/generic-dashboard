<?php
include('./header_menu_left.php');

$device_id = $_GET['device_id'];
$notification_id = $_GET['notification_id'];
$notification_query=$obj_tank->notification_details_by_id($notification_id);
$update_seen = $obj_tank->update_notification_seen($notification_id);
$notification_details=mysqli_fetch_assoc($notification_query);

$device_query=$obj_tank->select_all_tank_info_by_id($device_id);
$tank_details=mysqli_fetch_assoc($device_query);

?>


        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Notification Details</a>
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
                                    <h4 class="card-title ">Details</h4>
                                </div>
                                <div class="card-body">


<div class="card card-profile">
                                
                                <div class="card-body">
                                    <h2 class="card-category text-gray"><b>Device ID: </b><?php echo $tank_details['device_id']; ?></h2>
                                    <h4 class="card-title"><b>Owner: </b><?php echo $tank_details['owner']; ?></h4>
                                    <h4 class="card-title"><b>Location: </b><?php echo $tank_details['location']; ?></h4>
                                    
                                    <?php if($notification_details['seen']=='0'){ ?>
                                                            <?php if($notification_details['danger']=='1'){ ?>
                                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                        <span>
                                            <b> Notification - </b> <?php echo $notification_details['notification']; ?> </span>
                                    </div>
                                    <?php }else{ ?>
                                        <div class="alert alert-info">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                        <span>
                                            <b> Notification - </b> <?php echo $notification_details['notification']; ?> </span>
                                    </div>
                                    <?php } ?>
                                        <?php }else{ ?>
                                            <?php if($notification_details['danger']=='1'){ ?>
                                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                        <span>
                                            <b> Notification - </b> <?php echo $notification_details['notification']; ?> </span>
                                    </div>
                                    <?php }else{ ?>
                                        <div>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                        <span>
                                            <b> Notification - </b> <?php echo $notification_details['notification']; ?> </span>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>

                                </div>
                            </div>






		<div id="map" style="height: 500px; width: 100%;"></div>
        <script type="text/javascript">
            function initMap() {
                var options ={

                    zoom:14,
                    center:{lat: 23.774095, lng: 90.366370}
                }
                var map = new google.maps.Map(document.getElementById('map'), options);

                google.maps.event.addListener(map, 'click', function (event) {
                 addMarker({value:event.latlng});
                });
                    
                 addMarker({lat: 23.774095, lng: 90.366370});

                

				
                


                    function addMarker(value) {
                        var marker = new google.maps.Marker({ 
                          map: map,
                          draggable: true,
                          animation: google.maps.Animation.DROP,
                          position: value,
                          
                        });
                        marker.addListener('click', toggleBounce);
                    }
                
                    //var trafficLayer = new google.maps.TrafficLayer();
        //trafficLayer.setMap(map);
                
            }
            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                  marker.setAnimation(null);
                } else {
                  marker.setAnimation(google.maps.Animation.BOUNCE);
                }
              }
            
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWL6wnPVZXnE8skZ4E0Viv7QcS975iVcQ&callback=initMap">
        </script>
		

















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