<?php require_once("view_config.php"); ?>
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
                            وظیفه دادن به  کارمند
                        </header>
                        <table class="table table-striped border-top" id="sample_1">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم</th>
                                    <th>تخلص</th>
                                    <th>شماره تلفون</th>
                                    <th>دیپارتمنت</th>
                                    <th>حالت</th>
                                    <th> عملیات  </th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php

                            $sql = "SELECT employee.* FROM employee LEFT JOIN emp_qualification ON ( employee.id = emp_qualification.emp_id ) WHERE emp_qualification.emp_id IS NULL";
                            $rows = mysqli_query($GLOBALS['DB'], $sql);

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
                                            <td> '.$row['lastname'].' </td>
                                            <td class="hidden-phone">'.$row['phone'].'</td>
                                            <td class="center hidden-phone"> '.$dname.' </td>
                                            <td class="hidden-phone"> '.$row['emp_status'].' </td>
                                            <td>
                                                <a onclick="showInsertModal('.$row['id'].')" >
                                                    <button class=" btn btn-success ">
                                                        <i class="icon-plus"></i>
                                                    </button>
                                                </a>
                                            </td>
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


<!-- Modal Start -->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="act_emp_qualification.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> ثبت وظیفه برای کارمند   </h4>
                </div>
                <input type="hidden" value="1" name="insert" >
                <input type="hidden" name="emp_id" id="emp_id" >
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="qualification" class="col-lg-2 control-label"> وظیفه     </label>
                                <div class="col-lg-10">
                                    <select name="qualification" id="qualification" class="form-control">
                                        <option  value=""> یکی را انتخاب کنید  </option>
                                        <?php
                                            $qualifications = $crud->select('qualification',' * ');
                                            while ( $qualification =  $qualifications->fetch_array()){
                                                echo '<option value="'.$qualification['id'].'"> '.$qualification['name'].' </option>';
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
                                <label for="date_acheived" class="col-lg-2 control-label"> زمان شروع   </label>
                                <div class="col-lg-10">
                                    <input type="date" class="form-control" name="date_acheived" value="">
                                </div>
                            </div>
                        </div>

                        <br />
                        <br />

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="date_expired" class="col-lg-2 control-label"> زمان ختم  </label>
                                <div class="col-lg-10">
                                    <input type="date" class="form-control" name="date_expired" value="">
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

    function showInsertModal(id) {
        $("#emp_id").val(id);
        $("#insertModal").modal('show')
    }


</script>



</body>
</html>
