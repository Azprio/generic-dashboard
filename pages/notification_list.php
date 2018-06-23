<?php
$notification_list=$obj_tank->select_dropdown_notifications();
?>

<li class="nav-item dropdown">

                                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <?php $count_notification = mysqli_num_rows($notification_list); {?>
                                        <?php if($count_notification != 0){?>
                                    <span class="notification"><?php
                                                                echo $count_notification;
                                                                ?>
                                                                </span>
                                        <?php } ?>
                                        <?php } ?>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                                <?php $count_notification = mysqli_num_rows($notification_list); {?>
                                        <?php if($count_notification != 0){?>
                                    <?php while ($tank_notification_list = mysqli_fetch_assoc($notification_list)) { ?>
                                    <a class="dropdown-item" href="notification-details.php?device_id=<?php echo $tank_notification_list['device_id'];?>&&notification_id=<?php echo $tank_notification_list['notification_id'];?>"><?php echo $tank_notification_list['notification']; ?></a>
                                    <?php } ?>
                                    
                                    <?php } ?>
                                        <?php } ?>
                                    
                                        <a class="dropdown-item alert alert-info" href="notifications.php">See all Notifications</a>
                                        </div>
                                
                                        
                            </li>



