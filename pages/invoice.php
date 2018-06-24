<?php
$page_name = 'invoice';
include('./header_menu_left.php');
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM test ORDER BY id DESC"); // using mysqli_query instead
?>
<div class="main-panel">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Profile</a>
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

<div class="content ">
        <div class="container-fluid">
                <div class="card">
                        <div class="card-header card-header-primary">
                                <h4 class="card-title">Invoice</h4>
                                <p class="card-category">Created using Roboto Font Family</p>
                            </div>
                            <div class="card-body">
                            <?php 
          while($res = mysqli_fetch_array($result)) { 
         ?>
    <div class="ebody">
    <header class="clearfix">
        <div id="logo">
          <img src="../assets/img/logo.png">
        </div>
        <div id="company">
          <h2 class="name"><?php echo $res['com_name'] ?></h2>
          <div><?php echo $res['com_add'] ?></div>
          <div><?php echo $res['com_ph'] ?></div>
          <div><a href="mailto:company@example.com"><?php echo $res['com_email'] ?></a></div>
        </div>
        
      </header>
      <main>
        <div id="details" class="clearfix">
          <div id="client">
            <div class="to">INVOICE TO:</div>
            <h2 class="name"><?php echo $res['username'] ?></h2>
            <div class="address"><?php echo $res['user_add'] ?></div>
            <div class="email"><a href="mailto:john@example.com"><?php echo $res['user_email'] ?></a></div>
          </div>
          <div id="invoice">
            <h1>INVOICE 3-2-1</h1>
            <div class="date">Date of Invoice: 01/06/2014</div>
            <div class="date">Due Date: 30/06/2014</div>
          </div>
        </div>
        <table border="0" cellspacing="0" cellpadding="0">
          <thead>
            <tr>
              <th class="no">#</th>
              <th class="desc">DESCRIPTION</th>
              <th class="unit">UNIT PRICE</th>
              <th class="qty">QUANTITY</th>
              <th class="total">TOTAL</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="no">01</td>
              <td class="desc"><h3><?php echo $res['des_title'] ?></h3><?php echo $res['des'] ?></td>
              <td class="unit">$<?php echo $res['unit_price'] ?></td>
              <td class="qty"><?php echo $res['quantity'] ?></td>
              <td class="total">$<?php echo $res['total'] ?></td>
            </tr>
            
          </tbody>
          <tfoot>
            <tr>
              <td colspan="2"></td>
              <td colspan="2">SUBTOTAL</td>
              <td>$<?php echo $res['subtotal'] ?></td>
            </tr>
            <tr>
              <td colspan="2"></td>
              <td colspan="2">TAX 25%</td>
              <td>$<?php echo $res['tax'] ?></td>
            </tr>
            <tr>
              <td colspan="2"></td>
              <td colspan="2">GRAND TOTAL</td>
              <td>$<?php echo $res['grand'] ?></td>
            </tr>
          </tfoot>
          <?php } ?>
        
        </table>
        <div id="thanks">Thank you!</div>
        <form method="post" action="send_mail.php">
            
        <h5><b>send invoice to email :</b><b> rumman3000@gmail.com</b> <span><input type="submit" value="Send Email" onclick="alert('mail sent!')"></button></span></h5>
</form>
<br>
        <div id="notices">
          <div>NOTICE:</div>
          <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
        </div>
      </main>
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