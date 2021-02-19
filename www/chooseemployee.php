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
                            لسیت درخواست کننده گان شغل

                        </header>

                        <table class="table table-striped border-top" id="sample_1">

                            <thead>
                            <tr>
                                <th class="hidden-phone"> # </th>
                                <th class="hidden-phone">اسم</th>
                                <th class="hidden-phone">تخلص</th>
                                <th class="hidden-phone">شماره تلفون</th>
                                <th class="hidden-phone">تاریخ تولد</th>
                                <th class="hidden-phone">ایمیل</th>
                                <th class="hidden-phone">آدرس</th>
                                <th class="hidden-phone"> عملیات  </th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php

                                    $rows = $crud->select('employee',' * ' , " `emp_status` = 'pending' " );
                                    if($rows->num_rows > 0 ){

                                        $count = 1;
                                        while ($row = $rows->fetch_array()){

                                            echo  '
                                                <tr class="odd gradeX">
                                                    <td>  '.$count++.' </td>
                                                    <td> '.$row['firstname'].' </td>
                                                    <td class="hidden-phone">'.$row['lastname'].'</td>
                                                    <td class="center hidden-phone"> '.$row['phone'].' </td>
                                                    <td class="center hidden-phone">'.$row['DOB'].'</td>
                                                    <td class="hidden-phone">
                                                        <a href="mailto:jhone-doe@gmail.com">
                                                            '.$row['email'].'
                                                        </a>
                                                    </td>
                                                    <td class="hidden-phone"> '.$row['Address'].' </td>
                                                    <td>
                                                        <button onclick="addDepartment('.$row['id'].')" class="btn btn-success btn-xs">
                                                            <i class="icon-plus"></i>
                                                        </button>
                                                    </td>
                
                                                </tr>
                                            ';
                                        }
                                    }else{
                                        echo  '
                                            <tr> <td colspan="8"> کارمند جدید نداریم !  </td> </tr>
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


<!-- Modal Start -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="act_chooseemployee.php" method="post">
            <input type="hidden" name="em_id" id="em_id">
            <input type="hidden" value="1" name="insert" >
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> دیپارتمنت جدید</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="departments" class="col-lg-2 control-label"> دیپارتمنت  </label>
                                <div class="col-lg-10">
                                    <select name="departments" id="departments" class="form-control">
                                        <option value=""> یکی را انتخاب کنید  </option>
                                        <?php
                                            $departments = $crud->select('department',' * ');
                                            while ( $department =  $departments->fetch_array()){
                                                echo '<option value="'.$department['id'].'"> '.$department['dname'].' </option>';
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br />
                        <br />
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="status" class="col-lg-2 control-label">حالت</label>
                                <div class="col-lg-10">
                                    <select name="status" id="status" class="form-control">
                                        <option value="Approved">انتخاب شد</option>
                                        <option value="rejected">رد شد</option>
                                        <option value="Suspended"> درتاخیر باشد</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="submit">ذخیره</button>
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
    function addDepartment(id) {
        $("#em_id").val(id);
        $("#myModal2").modal('show');
    }

</script>


</body>
</html>
