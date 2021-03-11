<!-- Header start -->
<?php include_once('../../connection.php')?>
<header class="header">
    <div class="toggle-btns">
        <a id="toggle-sidebar" href="#">
            <i class="icon-list"></i>
        </a>
        <a id="pin-sidebar" href="#">
            <i class="icon-list"></i>
        </a>
    </div>
    <div class="header-items">
        <!-- Custom search start -->
        <div class="custom-search">
            <input type="text" id="search" class="search-query" placeholder="ຄົ້ນຫາ...">
            <i class="icon-search1"></i>
        </div>
        <!-- Custom search end -->

        <!-- Header actions start -->
        <ul class="header-actions">
            <li class="dropdown">
                <a href="../../services/settings/" class="settings" id="notifications">
                <i class="fa fa-th-large"></i>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                    <i class="icon-bell"></i>
                    <span class="count-label">8</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                    <div class="dropdown-menu-header">
                        Notifications (40)
                    </div>
                    <ul class="header-notifications">
                        <li>
                            <a href="#">
                                <div class="user-img away">
                                    <img src="../../img/user_null.png" alt="">
                                </div>
                                <div class="details">
                                    <div class="user-title">Abbott</div>
                                    <div class="noti-details">Membership has been ended.</div>
                                    <div class="noti-date">Oct 20, 07:30 pm</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-img busy">
                                   <img src="../../img/user_null.png" alt="">
                                </div>
                                <div class="details">
                                    <div class="user-title">Braxten</div>
                                    <div class="noti-details">Approved new design.</div>
                                    <div class="noti-date">Oct 10, 12:00 am</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-img online">
                                  <img src="../../img/user_null.png" alt="">
                                </div>
                                <div class="details">
                                    <div class="user-title">Larkyn</div>
                                    <div class="noti-details">Check out every table in detail.</div>
                                    <div class="noti-date">Oct 15, 04:00 pm</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
                    aria-haspopup="true">
                    <span class="user-name"><?php echo $_USER_FNAME ?></span>
                    <span class="avatar">
                        <img src="../../img/<?php if($_USER_IMG){echo $_USER_IMG;}else{echo 'user_null.png';}?>" alt="">
                        <span class="status busy"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <div class="header-user-profile">
                            <div class="header-user">
                                <img src="../../img/<?php if($_USER_IMG){echo $_USER_IMG;}else{echo 'user_null.png';}?>" alt="user">
                            </div>
                            <h5><?php echo $_USER_FNAME ?></h5>
                            <p><?php echo $_USER_ROLE?></p>
                        </div>
                        <a href="../../services/users/user-profile.php?id=<?php echo $_USER_ID?>"><i class="icon-user1"></i> ໂປຣໄຟລ໌</a>
                        <a href="../../services/change_password/"><i class="fa fa-key"></i> ປ່ຽນລະຫັດຜ່ານ</a>
                        <a href="../../services/loginhistory/?years=<?php echo $_YEAR ?>"><i class="fa fa-history"></i> ປະຫວັດການເຂົ້າລະບົບ</a>
                        <a href="../../services/profilesystem/"><i class="fa fa-cog"></i> ຂໍ້ມູນສຳນັກງານ</a>
                        <a href="#" onclick="_logout()"><i class="icon-log-out1"></i> ອອກຈາກລະບົບ</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- Header actions end -->
    </div>
</header>
<!-- Header end -->
