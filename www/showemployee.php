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
         <?php include 'include/sidebar.php'; ?>
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
                                    <img src="img/profile-avatar.jpg" alt="">
                                </a>
                                
                            </div>

                        </section>
                    </aside>
                    <aside class="profile-info col-lg-9">
                        <section class="panel">
                            <div class="bio-graph-heading">
                                
                         
                            </div>
                            <div class="panel-body bio-graph-info">
                                <h1> بیوگرافی</h1>

                                <form class="form-horizontal" role="form">

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label"> کامنت</label>
                                        <div class="col-lg-10">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <td>  نام </td>
                                                        <td>  نام </td>
                                                        <td>  نام </td>
                                                        <td>  نام </td>
                                                        <td>  نام </td>
                                                        <td>  نام </td>
                                                        <td>  نام </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td> علی  </td>
                                                        <td> علی  </td>
                                                        <td> علی  </td>
                                                        <td> علی  </td>
                                                        <td> علی  </td>
                                                        <td> علی  </td>
                                                        <td> علی  </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label"> کامنت</label>
                                        <div class="col-lg-10">
                                            <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">اسم </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="f-name" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">تخلص </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="l-name" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">ّآدرس</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="c-name" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">تاریخ تولد</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="b-day" placeholder=" ">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">ایمیل</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="email" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">شماره تیلفون</label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="mobile" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">سی وی </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="url" placeholder="http://www.demowebsite.com ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">حالت</label>
                                        <div class="col-lg-6">
                                            <select name="status" id="" class="form-control">
                                                <option value="">انتخاب شد</option>
                                                <option value="">رد شد</option>
                                                <option value=""> درتاخیر باشد</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="submit" class="btn btn-success">ذخیره</button>
                                            <button type="button" class="btn btn-default">لغو</button>
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
