<?php
    require_once ("view_config.php");
    $row = $crud->select_one("user", " id = '$user_id'  ");
    $row = $row->fetch_array();
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
        $title= "لیست کارمندان";
        include_once 'include/title.php';
    ?>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
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
    <?php include 'include/header.php';?>
    <!--header end-->
    <!--sidebar start-->
    <?php
        $menu = "profile";
        include 'include/sidebar.php';
        ?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <aside class="profile-nav col-lg-3">
                    <section class="panel">
                        <div class="user-heading round">
                            <a href="#">
                                <img src="<?php echo $photo ?>" alt="">
                            </a>
                        </div>
                    </section>
                </aside>
                <aside class="profile-info col-lg-9">
                    <section class="panel">
                        <div class="bio-graph-heading">
                            <p>مشخصات ادمین</p>
                        </div>
                        <div class="panel-body bio-graph-info">
                            <h1> بیوگرافی</h1>
                            <form class="form-horizontal" role="form" method="post" action="act_profile.php" enctype="multipart/form-data">

                                <input type="hidden" value="1" name="edit" >

                                <div class="form-group">
                                    <label class="col-lg-2 control-label"> عکس  </label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" name="name" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">اسم </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">  تخلص</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">ایمیل</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="email" value="<?php echo $row['email']?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">شماره تیلفون</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']?>" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label"> اسم کاربری</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="username" value="<?php echo $row['username'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">رمز</label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" name="password" id="pass" value="<?php echo $row['password'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" name="submit" class="btn btn-success"> ویرایش  </button>
                                        <a href="profile.php"  class="btn btn-danger">لغو</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </section>

                </aside>
            </div>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/jquery-knob/js/jquery.knob.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>


</body>
</html>
