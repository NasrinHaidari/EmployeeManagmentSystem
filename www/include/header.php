<header class="header white-bg">
    <div class="sidebar-toggle-box">
        <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
    </div>
    <!--logo start-->
    <a href="index.php" class="logo"> سیستم مدیریت استخدامات  </a>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
            <!-- settings start -->

            <!-- inbox dropdown start-->

            <!-- inbox dropdown end -->
            <!-- notification dropdown start-->
<!--            <li id="header_notification_bar" class="dropdown">-->
<!--                <a data-toggle="dropdown" class="dropdown-toggle" href="#">-->
<!---->
<!--                    <i class="icon-bell-alt"></i>-->
<!--                    <span class="badge bg-warning">7</span>-->
<!--                </a>-->
<!--                <ul class="dropdown-menu extended notification">-->
<!--                    <div class="notify-arrow notify-arrow-yellow"></div>-->
<!--                    <li>-->
<!--                        <p class="yellow">شما 7 اعلام جدید دارید</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <span class="label label-danger"><i class="icon-bolt"></i></span>-->
<!--                            سرور شماره 3 توقف کرده-->
<!---->
<!--                            <span class="small italic">34 دقیقه قبل</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <span class="label label-warning"><i class="icon-bell"></i></span>-->
<!--                            سرور شماره 4 بارگزاری نمی شود-->
<!---->
<!--                            <span class="small italic">1 ساعت قبل</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <span class="label label-danger"><i class="icon-bolt"></i></span>-->
<!--                            پنل مدیریت 24% پیشرفت داشته است-->
<!---->
<!--                            <span class="small italic">4 ساعت قبل</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <span class="label label-success"><i class="icon-plus"></i></span>-->
<!--                            ثبت نام کاربر جدید-->
<!---->
<!--                            <span class="small italic">همین حالا</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <span class="label label-info"><i class="icon-bullhorn"></i></span>-->
<!--                            برنامه پیام خطا دارد-->
<!---->
<!--                            <span class="small italic">10 دقیقه قبل</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">نمایش تمامی اعلام ها</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
            <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
    </div>
    <div class="top-nav ">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder="Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" style="width: 150px;" class="dropdown-toggle" href="#">
                    <img alt="" src="<?php echo $photo ?>" width="25%" >
                    <span class="username">
                             <?php echo $user_name ?>                             
                            </span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
                    <li><a href="#"><i class="icon-cog"></i>تنظیمات</a></li>
                    <li><a href="#"><i class="icon-bell-alt"></i>اعلام ها</a></li>
                    <li><a href="logout.php"><i class="icon-key"></i>خروج</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</header>