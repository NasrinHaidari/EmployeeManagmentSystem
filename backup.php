<?php
//$data = $_POST["frm"];
////var_dump($data);
//
//if ($data['name'] == "Nasrin" && $data['lastname'] == "Haidari" && $data['password'] == "123" && $data['email'] == "nasrinhaidari@gmail.com") {
//    echo "welcome " . "<span style='color: red'>" . $data['name'] . "</span>";
//} elseif ($data['name'] == "Riyhana" && $data['lastname'] == "Ahmadi" && $data['password'] == "123" && $data['email'] == "riyhanaahmadi@gmail.com") {
//    echo "welcome " . "<span style='color: red'>" . $data['name'] . "</span>";
//} else {
//    include "profile.php";
//}

session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php?login=first");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <?php
    $title ="صحفه اصلی ";
    include_once 'include/title.php';
    ?>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <?php
    include "include/header.php";
    ?>
    <!--header end-->
    <!--sidebar start-->
    <?php
    include "include/sidebar.php";
    ?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            <div class="row state-overview">
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol terques">
                            <i class="icon-user"></i>
                        </div>
                        <div class="value">
                            <h1>22</h1>
                            <p>کاربر جدید</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol red">
                            <i class="icon-tags"></i>
                        </div>
                        <div class="value">
                            <h1>140</h1>
                            <p>فروش</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol yellow">
                            <i class="icon-shopping-cart"></i>
                        </div>
                        <div class="value">
                            <h1>345</h1>
                            <p>سفارش جدید</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol blue">
                            <i class="icon-bar-chart"></i>
                        </div>
                        <div class="value">
                            <h1>34,500</h1>
                            <p>سود خالص</p>
                        </div>
                    </section>
                </div>
            </div>
            <!--state overview end-->


        </section>

        <div class="row-lg-3">
            <!--Start Commint Graph -->
            <div class="col-lg-4">
                <section class="panel">
                    <header class="panel-heading">
                        گراف کامنت ها

                    </header>
                    <div class="panel-body">
                        <div id="hero-donut" class="graph"><svg height="250" version="1.1" width="354" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.0.1</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#41cac0" d="M227,201.66666666666669A76.66666666666667,76.66666666666667,0,0,0,303.6666664302074,125.00602138591319" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#41cac0" stroke="#ffffff" d="M227,204.66666666666669A79.66666666666667,79.66666666666667,0,0,0,306.66666642095464,125.00625700536196L336.9999996607323,125.00863937978849A110,110,0,0,1,227,235Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#49e2d7" d="M303.6666664302074,125.00602138591319A76.66666666666667,76.66666666666667,0,0,0,166.79544110129612,77.53223340423236" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#49e2d7" stroke="#ffffff" d="M306.66666642095464,125.00625700536196A79.66666666666667,79.66666666666667,0,0,0,164.43961053569467,75.6747990591806L136.6931616519442,53.79835010634855A115,115,0,0,1,341.9999996453111,125.00903207886978Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#34a39b" d="M166.79544110129612,77.53223340423236A76.66666666666667,76.66666666666667,0,0,0,179.527505095641,185.2008306033512" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#34a39b" stroke="#ffffff" d="M164.43961053569467,75.6747990591806A79.66666666666667,79.66666666666667,0,0,0,177.66988572981825,187.55651527913452L158.88728991983274,211.37510477872127A110,110,0,0,1,140.6195459279466,56.89407401476818Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#41cac0" d="M179.527505095641,185.2008306033512A76.66666666666667,76.66666666666667,0,0,0,226.9759144567186,201.66666288331834" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#41cac0" stroke="#ffffff" d="M177.66988572981825,187.55651527913452A79.66666666666667,79.66666666666667,0,0,0,226.97497197893804,204.6666627352743L226.9654424813789,234.99999457171762A110,110,0,0,1,158.88728991983274,211.37510477872127Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="227" y="115" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 800 15px Arial;" font-size="15px" font-weight="800" transform="matrix(1.7726,0,0,1.7726,-175.3892,-97.2077)" stroke-width="0.5641304347826086"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">کامنت ها</tspan></text><text x="227" y="135" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 14px Arial;" font-size="14px" transform="matrix(1.5957,0,0,1.5957,-135.0854,-75.6493)" stroke-width="0.6266983695652173"><tspan dy="4.8046875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">40%</tspan></text></svg></div>
                    </div>
                </section>
            </div>
            <!-- End Commit Graph -->

            <!--Start User Graph -->
            <div class="col-lg-4">
                <section class="panel">
                    <header class="panel-heading">
                        گراف کاربر

                    </header>
                    <div class="panel-body">
                        <div id="hero-donut" class="graph"><svg height="250" version="1.1" width="354" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.0.1</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#41cac0" d="M227,201.66666666666669A76.66666666666667,76.66666666666667,0,0,0,303.6666664302074,125.00602138591319" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#41cac0" stroke="#ffffff" d="M227,204.66666666666669A79.66666666666667,79.66666666666667,0,0,0,306.66666642095464,125.00625700536196L336.9999996607323,125.00863937978849A110,110,0,0,1,227,235Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#49e2d7" d="M303.6666664302074,125.00602138591319A76.66666666666667,76.66666666666667,0,0,0,166.79544110129612,77.53223340423236" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#49e2d7" stroke="#ffffff" d="M306.66666642095464,125.00625700536196A79.66666666666667,79.66666666666667,0,0,0,164.43961053569467,75.6747990591806L136.6931616519442,53.79835010634855A115,115,0,0,1,341.9999996453111,125.00903207886978Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#34a39b" d="M166.79544110129612,77.53223340423236A76.66666666666667,76.66666666666667,0,0,0,179.527505095641,185.2008306033512" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#34a39b" stroke="#ffffff" d="M164.43961053569467,75.6747990591806A79.66666666666667,79.66666666666667,0,0,0,177.66988572981825,187.55651527913452L158.88728991983274,211.37510477872127A110,110,0,0,1,140.6195459279466,56.89407401476818Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#41cac0" d="M179.527505095641,185.2008306033512A76.66666666666667,76.66666666666667,0,0,0,226.9759144567186,201.66666288331834" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#41cac0" stroke="#ffffff" d="M177.66988572981825,187.55651527913452A79.66666666666667,79.66666666666667,0,0,0,226.97497197893804,204.6666627352743L226.9654424813789,234.99999457171762A110,110,0,0,1,158.88728991983274,211.37510477872127Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="227" y="115" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 800 15px Arial;" font-size="15px" font-weight="800" transform="matrix(1.7726,0,0,1.7726,-175.3892,-97.2077)" stroke-width="0.5641304347826086"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">کاربر جدید</tspan></text><text x="227" y="135" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 14px Arial;" font-size="14px" transform="matrix(1.5957,0,0,1.5957,-135.0854,-75.6493)" stroke-width="0.6266983695652173"><tspan dy="4.8046875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">40%</tspan></text></svg></div>
                    </div>
                </section>
            </div>
            <!-- End User Graph -->

            <!--Start Qalification Graph -->
            <div class="col-lg-4">
                <section class="panel">
                    <header class="panel-heading">
                        گراف صلاحیت

                    </header>
                    <div class="panel-body">
                        <div id="hero-donut" class="graph"><svg height="250" version="1.1" width="354" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.6px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.0.1</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#41cac0" d="M227,201.66666666666669A76.66666666666667,76.66666666666667,0,0,0,303.6666664302074,125.00602138591319" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#41cac0" stroke="#ffffff" d="M227,204.66666666666669A79.66666666666667,79.66666666666667,0,0,0,306.66666642095464,125.00625700536196L336.9999996607323,125.00863937978849A110,110,0,0,1,227,235Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#49e2d7" d="M303.6666664302074,125.00602138591319A76.66666666666667,76.66666666666667,0,0,0,166.79544110129612,77.53223340423236" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#49e2d7" stroke="#ffffff" d="M306.66666642095464,125.00625700536196A79.66666666666667,79.66666666666667,0,0,0,164.43961053569467,75.6747990591806L136.6931616519442,53.79835010634855A115,115,0,0,1,341.9999996453111,125.00903207886978Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#34a39b" d="M166.79544110129612,77.53223340423236A76.66666666666667,76.66666666666667,0,0,0,179.527505095641,185.2008306033512" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#34a39b" stroke="#ffffff" d="M164.43961053569467,75.6747990591806A79.66666666666667,79.66666666666667,0,0,0,177.66988572981825,187.55651527913452L158.88728991983274,211.37510477872127A110,110,0,0,1,140.6195459279466,56.89407401476818Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#41cac0" d="M179.527505095641,185.2008306033512A76.66666666666667,76.66666666666667,0,0,0,226.9759144567186,201.66666288331834" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#41cac0" stroke="#ffffff" d="M177.66988572981825,187.55651527913452A79.66666666666667,79.66666666666667,0,0,0,226.97497197893804,204.6666627352743L226.9654424813789,234.99999457171762A110,110,0,0,1,158.88728991983274,211.37510477872127Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="227" y="115" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 800 15px Arial;" font-size="15px" font-weight="800" transform="matrix(1.7726,0,0,1.7726,-175.3892,-97.2077)" stroke-width="0.5641304347826086"><tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">صلاحیت ها</tspan></text><text x="227" y="135" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 14px Arial;" font-size="14px" transform="matrix(1.5957,0,0,1.5957,-135.0854,-75.6493)" stroke-width="0.6266983695652173"><tspan dy="4.8046875" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">40%</tspan></text></svg></div>
                    </div>
                </section>
            </div>
            <!-- End Qalification Graph -->
        </div>
    </section>
    <!--main content end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/jquery.customSelect.min.js" ></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>

<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>
