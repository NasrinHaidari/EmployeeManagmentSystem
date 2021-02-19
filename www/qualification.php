<?php require_once ("view_config.php"); ?>
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
    $title ="وظایف";
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

        $menu = "qualification";
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
                            لسیت وظایف



                        </header>
                        <br>
                        <div class="row text-center">
                            <div class="col-lg-3 col-sm-8" >
                                <a href="emp_qualificaion.php"><button class="btn btn-block  btn-success btn-sm">
                                        تعیین وظیفه کارمند  <i class="icon-plus"></i></button></a>
                            </div>
                        </div>
                        <table class="table table-striped border-top" id="sample_1">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم</th>
                                <th>تخلص</th>
                                <th>شماره تلفون</th>
                                <th>دیپارتمنت</th>
                                <th>حالت</th>
                                <th> صلاحیت  </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            $sql = "SELECT employee.* , emp_qualification.emp_id FROM `employee` , `emp_qualification` WHERE employee.id = emp_qualification.emp_id";
                            $rows = mysqli_query($GLOBALS['DB'], $sql);

                            if($rows->num_rows > 0){

                                $count = 1;
                                while ($row = $rows->fetch_array()){

                                    $dp_id   = $row['dp_id'];
                                    $dname   = $crud->select_one('department'," `id` =  '$dp_id' ");
                                    $dname   = $dname->fetch_array()['dname'];

                                    $emp_id    = $row['emp_id'];
                                    $qu_name   = $crud->select_one('qualification'," `id` =  '$emp_id' ");
                                    $qu_name   = $qu_name->fetch_array()['name'];



                                    echo '
                                        <tr class="odd gradeX">
                                            <td> '.$count++.' </td>
                                            <td> '.$row['firstname'].' </td>
                                            <td> '.$row['lastname'].' </td>
                                            <td class="">'.$row['phone'].'</td>
                                            <td class=""> '.$dname.' </td>
                                            <td class=""> '.$row['emp_status'].' </td>
                                            <td class=""> '.$qu_name.' </td>
                                            
                                        </tr>
                                    ';
                                }

                            }else{
                                echo '
                                    <tr> <td colspan="7"> کدام دیتا وجود ندارد  </td> </tr>
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
