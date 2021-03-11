<!-- Sidebar wrapper start -->
<nav id="sidebar" class="sidebar-wrapper">
    <!-- Sidebar brand start  -->
    <div class="sidebar-brand text-center">
        <a href="../../services/home/" class="logo">
            <img src="../../img/../img/<?php if($_profile['p_logo']){echo $_profile['p_logo'];}else{echo 'app-logo.png';}?>"
                alt="">
            &nbsp;&nbsp;<h2 class="mt-2 text-white">A<span style="color:yellow">WPS</span></h2>
        </a>
    </div>
    <!-- Sidebar brand end  -->

    <!-- Sidebar content start -->
    <div class="sidebar-content">

        <!-- sidebar menu start -->
        <div class="sidebar-menu">
            <ul>
                <li class="home">
                    <a href="../../services/home/">
                        <i class="icon-home"></i>
                        <span class="menu-text">ໜ້າຫຼັກ</span>
                    </a>
                </li>
                <?php
                            $_callMenu=$_SQL($con,"SELECT*FROM aws_menu ORDER BY menu_createdAt ASC");
                            foreach($_callMenu as $res){
                        ?>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-<?php echo $res['menu_icon']?>"></i>
                        <span class="menu-text"><?php echo $res['menu_title']?></span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <?php
                            $menu_id=$res['menu_id'];
                            $_callSubMenu=$_SQL($con,"SELECT*FROM aws_submenu WHERE sub_menu_id='$menu_id' ORDER BY subm_createdAt ASC");
                            foreach($_callSubMenu as $_res){
                        ?>
                            <li>
                                <a href="<?php echo $_res['subm_link']?>"><?php echo $_res['subm_title']?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
                <?php } ?>
                <li class="group">
                    <a href="../../services/group/">
                        <i class="icon-users"></i>
                        <span class="menu-text">ສ້າງກຸ່ມ</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end -->

    </div>
    <!-- Sidebar content end -->

</nav>
<!-- Sidebar wrapper end -->