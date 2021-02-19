<?php

    require_once ("view_config.php");



    if(isset($_GET['search'])){

        $condition = '';
        if(!empty($_GET['name'])){
            $name = $v_obj->valid($_GET['name']);
            $condition = " and firstname like  '%$name%' ";
        }

        if(!empty($_GET['email'])){
            $email = $v_obj->valid($_GET['email']);
            $condition = " and email = '$email' ";
        }

        if(!empty($_GET['dp_id'])){
            $dp_id = $v_obj->valid($_GET['dp_id']);
            $condition = " and dp_id  = '$dp_id' ";
        }

        $rows = $crud->select('employee',' * ' , " `emp_status` != 'pending' $condition " );


    }else {
        $rows = $crud->select('employee',' * ' , " `emp_status` != 'pending' " );
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
    $title ="کارمندان";
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
        $menu = "employee";
        include 'include/sidebar.php';?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">


        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            فورم جستجو
                        </header>
                        <br>
                        <div class="row ">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <form class="form-horizontal" method="get" action="#">

                                    <input type="hidden" value="1" name="search" >
                                    <div class="form-group">
                                        <label class="control-label col-sm-1" for="name">نام </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="مثال:احمد">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-1" for="email">ایمیل </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="abc@gmail.com">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-1" for="dp_id">دیپارتمنت </label>
                                        <div class="col-md-8">
                                            <select name="dp_id" class="form-control" id="dp_id">
                                                <option value=""> یکی را انتخاب کنید  </option>
                                                <?php

                                                $department = $crud->select('department',' id , dname ');

                                                if($department->num_rows > 0 ){
                                                    while ($drow = $department->fetch_array()){
                                                        echo '<option value="'.$drow['id'].'"> '.$drow['dname'].' </option>';
                                                    }
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div

                                    <div class="form-group">
                                        <div class="col-sm-offset-1 col-sm-10">
                                            <button type="submit" class="btn btn-default"> جستجو  </button>
                                            <a href="employee.php" type="submit" class="btn btn-danger"> تازه سازی   </a><br /><br /><br />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </section>
                </div>

                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            لسیت کارمندان استخدام شده
                        </header>
                        <br>
                        <div class="row text-center">
                            <div class="col-lg-3 col-sm-8" >
                                <a href="chooseemployee.php"><button class="btn btn-block  btn-success btn-sm">
                                        انتخاب کارمند <i class="icon-plus"></i></button></a>
                            </div>
                        </div>
                        <table class="table table-striped border-top" id="sample_1">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم</th>
                                    <th class="hidden-phone">ایمیل</th>
                                    <th class="hidden-phone">شماره تلفون</th>
                                    <th class="hidden-phone">دیپارتمنت</th>
                                    <th class="hidden-phone">حالت</th>
                                    <th class="hidden-phone">تنظیمات</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php


                            if($rows->num_rows > 0){

                                $count = 1;
                                while ($row = $rows->fetch_array()){

                                    $dp_id   = $row['dp_id'];
                                    $dname   = $crud->select_one('department'," `id` =  '$dp_id' ");
                                    $dname   = $dname->fetch_array()['dname'];

                                    echo '
                                        <tr class="odd gradeX">
                                            <td> '.$count++.' </td>
                                            <td> '.$row['firstname'].' </td>
                                            <td class="hidden-phone"><a href="mailto:jhone-doe@gmail.com"> '.$row['email'].' </a></td>
                                            <td class="hidden-phone">'.$row['phone'].'</td>
                                            <td class="center hidden-phone"> '.$dname.' </td>
                                            <td class="hidden-phone"> '.$row['emp_status'].' </td>
                                            <td >
                                                <a onclick="showEditModal('.$row['id'].')" ><button  class="btn btn-success btn-xs">
                                                        <i class="icon-pencil"></i>
                                                    </button>
                                                </a>
                                                <a href="act_chooseemployee.php?deleted&id='.$row['id'].'" class="deleted">
                                                    <button class=n-danger btn-xs">
                                                    <i class="icon-trash "></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    ';
                                }

                            }else{

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

<!-- Modal Start -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="act_chooseemployee.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> ویرایش دیپارتمنت </h4>
                </div>
                <div class="modal-body" id="modal-body">


                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="submit"> ویرایش  </button>
                    <button data-dismiss="modal" class="btn btn-danger" type="button">لغو</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Modal End -->


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


    <script>

        function showEditModal(id) {
            $.ajax({
                url : "edit_employee.php",
                method:"post",
                data : {
                    id : id
                },success:function (response) {
                    $("#modal-body").html(response);
                    $("#myModal2").modal('show');
                }
            })
        }


    </script>


</body>
</html>
