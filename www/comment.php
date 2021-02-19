<?php require_once ("view_config.php");?>
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
    $title ="کامنت";
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
    <link rel="stylesheet" href="assets/PersianScript.ir.url">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <?php include 'include/header.php'?>
    <!--header end-->
    <!--sidebar start-->
    <?php

        $menu = "comment";
        include 'include/sidebar.php';
        ?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            لسیت کامنت ها
                        </header>
                        <br>

                        <table class="table table-striped border-top" id="sample_1">
                            <thead>
                                <tr>
                                    <th>شماره</th>
                                    <th class="hidden-phone">کامنت</th>
                                    <th class="hidden-phone">اسم کاربر </th>
                                    <th class="hidden-phone">تنظیمات</th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php

                            $rows = $crud->select('commentinfo',' * ' , "" );

                            if($rows->num_rows > 0){
                                $count = 1;
                                while ($row = $rows->fetch_array()){

                                    $emp_id = $row['emp_id'];
                                    $emp_name = $crud->select_one('employee',"`id`= '$emp_id'");
                                    $emp_name = $emp_name->fetch_array()['firstname'];

                                    echo '
                                        <tr class="odd gradeX">
                                            <td>'.$count++.'</td>
                                            <td class="hidden-phone">'.$row['emp_comment'].'</td>
                                            <td class="hidden-phone">'.$emp_name.'</td>
                                            <td >
                                                <a href="each_comment.php?updateId='.$row['id'].'">
                                                    <button class="btn btn-success btn-xs">
                                                        <i class="icon-pencil"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    ';
                                }
                            }else{
                                echo  '
                                    <tr> <td colspan="4"> کدام دیتا وجود ندارد </td> </tr> 
                                ';
                            }

                            ?>
                            </tbody>
                        </table>
                    </section>
                </div>
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
<script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>


<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page only-->
<script src="js/dynamic-table.js"></script>


</body>
</html>
