<?php
    require_once("view_config.php");

    if(isset($_GET['updateId'])){
        $id = $v_obj->valid($_GET['updateId']);
        $row = $crud->select_one('commentinfo' , " `id` = '$id' ");
        $row = $row->fetch_array();

        $emp_id = $row['emp_id'];
        $emp_row = $crud->select_one('employee' , " `id` = '$emp_id' ");
        $emp_row = $emp_row->fetch_array();

    }else{
        header("location: comment.php?error");
        exit();
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
        $title =" کامنت ";
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

            <!-- Header Section -->
<!--            <aside class="profile-info col-lg-12">-->
<!--                <section class="panel">-->
<!--                    <div class="bio-graph-heading">-->
<!---->
<!--                    </div>-->
<!--                </section>-->
<!--            </aside>-->

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            نظریه دادن
                        </header>
                        <div class="panel-body">
                            <div class="timeline-messages">
                                <!-- Comment -->
                                <form method="post" action="act_comment.php"  enctype="multipart/form-data">
                                    <input type="hidden" value="1" name="insert"  >
                                    <input type="hidden" value="<?php echo $row['id']?>" name="rowId"  >
                                    <div class="msg-time-chat">
                                        <a href="#" class="message-img">
                                            <img class="avatar" src="<?php if(isset($emp_row['photo'])) echo $emp_row['photo']?>" alt=""></a>
                                        <div class="message-body msg-in">
                                            <span class="arrow"></span>
                                            <div class="text">
                                                <p class="attribution"><a href="#">کامنت</a></p>

                                                <div class="chat-form">

                                                    <div class="input-cont ">
                                                        <p class="form-control col-lg-12">
                                                            <?php if(isset($row['emp_comment'])) echo $row['emp_comment'] ?>
                                                        </p>
                                                    </div>

                                                    <div class="col-lg-10">
                                                        <label class="radio-inline">
                                                            <input type="radio" id="inlineCheckbox1"  name="status_data" <?php if($row['status'] == "High") {echo "checked";} ?> value="High">
                                                            عالی
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="radio" id="inlineCheckbox2" name="status_data" <?php if($row['status'] == "Middle") {echo "checked";} ?> value="Middle">
                                                            متوسط
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="radio" id="inlineCheckbox3" name="status_data" <?php if($row['status'] == "Low") {echo "checked";} ?> value="Low">
                                                            ضعیف
                                                        </label>
                                                    </div>

                                                    <!-- Save Button -->
                                                    <div class="form-group">
                                                        <div class="pull-right chat-features">
                                                            <button class="btn btn-shadow btn-primary" type="submit"> ذخیره  </button>
                                                        </div>
                                                    </div>

                                                </div><br><br>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- /comment -->

                            </div>
                        </div>
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
<script src="assets/jquery-knob/js/jquery.knob.js"></script>


<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<script>

    //knob
    $(".knob").knob();

</script>

</body>
</html>
