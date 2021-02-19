<?php
require_once("view_config.php");
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
    $title ="دیپارتمنت";
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
<?php

$rows = $crud->select("department", "`id`, `dname`, `user_id`", "");

?>
<section id="container" class="">
    <!--header start-->
    <?php include 'include/header.php'?>
    <!--header end-->
    <!--sidebar start-->
    <?php

        $menu = "department";
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
                            لسیت دیپارتمنت ها

                        </header>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <a class="btn btn-success btn-block" data-toggle="modal" href="#myModal2"> دیپارتمنت جدید
                                    </a>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped border-top" id="sample_1">

                            <thead>
                            <tr>
                                <th>شماره</th>
                                <th class="hidden-phone">اسم</th>
                                <th class="hidden-phone">تعداد اعضا </th>
                                <th> عملیات </th>
                            </tr>

                            </thead>
                            <tbody>
                            <?php

                                $rows = $crud->select('department', ' * ','');
                                if($rows->num_rows > 0 ){
                                    $count = 1;
                                    while ($row = $rows->fetch_array()){
                                        $dp_id = $row['id'];
                                        $number_member = $crud->count('employee','dp_id'," `dp_id` = '$dp_id' ");

                                        echo '
                                            <tr class="odd gradeX">
                                                <td>'.$count++.'</td>
                                                <td class="hidden-phone"><a href="mailto:jhone-doe@gmail.com">'.$row['dname'].'</a></td>
                                                <td class="hidden-phone">'.$number_member.'</td>
                                                <td >
                                                    <a onclick="showEditModal('.$row['id'].')" ><button  class="btn btn-success btn-xs">
                                                            <i class="icon-pencil"></i>
                                                        </button>
                                                    </a>
                                                    <a href="act_department.php?deleted&id='.$row['id'].'" class="deleted">
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
        <form action="act_department.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> دیپارتمنت جدید</h4>
                </div>
                <input type="hidden" value="1" name="insert" >
                <div class="modal-body">
                    <input type="text" name="name" class="form-control">
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



<!-- Modal Start -->
<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="act_department.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> ویرایش  دیپارتمنت </h4>
                </div>
                <div class="modal-body" id="modal-body" >

                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="submit"> ویریش  </button>
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
            url : "edit_department.php",
            method:"post",
            data : {
                id : id
            },success:function (response) {
                $("#modal-body").html(response);
                $("#edit_modal").modal('show');
            }
        })
    }
</script>


</body>
</html>
