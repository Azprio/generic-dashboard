<?php
require '../controller/tank_database.php';
$obj_tank = new Tank_database();
$query_result=$obj_tank->select_all_tank_info();
$query_result1=$obj_tank->select_all_user_info();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Water Tank
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="../assets/css/custom-stylesheet.css" />
  <link rel="stylesheet" href="../assets/css/my.css" />
  <!-- <link rel="stylesheet" href="../assets/css/style.css" media="all" /> -->
</head>

<body class="">
<div class="wrapper ">





    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
          <a href="./index.php" class="simple-text logo-normal">
          Water Tank
        </a>
        
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if($page_name == 'index'){ echo 'active';} ?>">
            <a class="nav-link" href="./index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php if($page_name == 'user'){ echo 'active';} ?>">
            <a class="nav-link" href="./user.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item <?php if($page_name == 'user_list'){ echo 'active';} ?>">
            <a class="nav-link" href="./user_list.php">
              <i class="material-icons">content_paste</i>
              <p>Registered User</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./typography.php">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li> -->
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./icons.php">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li> -->
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./map.php">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li> -->
          <li class="nav-item <?php if($page_name == 'tank_details'){ echo 'active';} ?>">
            <a class="nav-link" href="./tank_details.php">
              <i class="material-icons">call_to_action</i>
              <p>Tank Details</p>
            </a>
          </li>
          <li class="nav-item <?php if($page_name == 'invoice'){ echo 'active';} ?>">
            <a class="nav-link" href="./invoice.php">
              <i class="material-icons">content_paste</i>
              <p>Invoice</p>
              </a>
          </li>
          <li class="nav-item <?php if($page_name == 'frs_temp'){ echo 'active';} ?>">
            <a class="nav-link" href="./frs_temp.php">
              <i class="material-icons">content_paste</i>
              <p>Cam View</p>
              </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>