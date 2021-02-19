<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">

            <li class="<?php if(isset($menu) and $menu =="index" ) echo "active" ?>">
                <a class="" href="index.php">
                    <i class="icon-home"></i>
                    <span>صفحه اصلی</span>
                </a>
            </li>

            <li class="<?php if(isset($menu) and $menu =="profile" ) echo "active" ?>">
                <a class="" href="profile.php">
                    <i class="icon-user"></i>
                    <span> ادمین</span>
                </a>
            </li>
            <li class="<?php if(isset($menu) and $menu =="employee" ) echo "active" ?>">
                <a class="" href="employee.php">
                    <i class="icon-group"></i>
                    <span> کارمندان</span>
                </a>
            </li>
            <li class="<?php if(isset($menu) and $menu =="department" ) echo "active" ?>">
                <a class="" href="department.php">
                    <i class="icon-sitemap"></i>
                    <span> دیپارتمنت ها</span>
                </a>
            </li>
            <li class="<?php if(isset($menu) and $menu =="qualification" ) echo "active" ?>">
                <a class="" href="qualification.php">
                    <i class="icon-suitcase"></i>
                    <span>وظایف</span>
                </a>
            </li>

            <li class="<?php if(isset($menu) and $menu =="add_qualification" ) echo "active" ?>">
                <a class="" href="add_qualification.php">
                    <i class="icon-suitcase"></i>
                    <span> ثبت وظایف  </span>
                </a>
            </li>

            <li class="<?php if(isset($menu) and $menu =="comment" ) echo "active" ?>">
                <a class="" href="comment.php">
                    <i class="icon-comments"></i>
                    <span>کامنت ها</span>
                </a>
            </li>

<!--            <li>-->
<!--                <a class="" href="login.php">-->
<!--                    <i class="icon-signin"></i>-->
<!--                    <span>صفحه ورود به سایت</span>-->
<!--                </a>-->
<!--            </li>-->
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
