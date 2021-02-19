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
    $title =" کاربر";
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

<section class="container" >
    <!--header start-->
    <section class="panel" >

        <header class="panel-heading tab-bg-dark-navy-blue ">
            <h1 style="color: white"> فورم راجستر کارمند </h1>
        </header>

        <section id="main-content"  >
            <section class="wrapper">
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-xs-offset-2">
                        <section class="panel">

                            <header class="panel-heading">
                                فورم راجستر
                            </header>

                            <div class="panel-body">
                                <div class="stepy-tab">
                                    <ul id="default-titles" class="stepy-titles clearfix">
                                        <li id="default-title-0" class="current-step">
                                            <label> مرحله ۱</label>
                                        </li>
                                        <li id="default-title-1" class="">
                                            <label>مرحله ۲</label>
                                        </li>
                                        <li id="default-title-2" class="">
                                            <label> مرحله ۳</label>
                                        </li>
                                    </ul>
                                </div>
                                <form class="form-horizontal"  enctype="multipart/form-data" id="default" action="act_user.php" method="post">
                                    <input type="hidden" value="1" name="insert" >

                                    <fieldset title="مرحله ۱" class="step" id="default-step-0">
                                        <legend></legend>
                                        <div class="form-group">
                                            <label for="firstname" class="col-lg-2 control-label">اسم</label>
                                            <div class="col-lg-10">
                                                <input type="text" onblur="setValue()" name="firstname" id="firstname" class="form-control" placeholder=" اسم">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="lastname" class="col-lg-2 control-label">تخلص</label>
                                            <div class="col-lg-10">
                                                <input type="text" onblur="setValue()" name="lastname" id="lastname" class="form-control" placeholder="تخلص">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="col-lg-2 control-label"> ایمیل  </label>
                                            <div class="col-lg-10">
                                                <input type="email" onblur="setValue()" name="email" id="email" class="form-control" placeholder="abc@gmail.com">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="DOB" class="col-lg-2 control-label"> تاریخ تولد  </label>
                                            <div class="col-lg-10">
                                                <input type="date" onblur="setValue()" name="DOB" id="DOB" class="form-control" placeholder="تاریخ تولد">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="photo" class="col-lg-2 control-label"> ارسال عکس</label>
                                            <div class="col-lg-10">
                                                <input type="file" onblur="setValue()" name="photo" id="photo" class="form-control" >
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset title="مرحله ۲ " class="step" id="default-step-1">

                                        <legend></legend>

                                        <div class="form-group">
                                            <label for="phone" class="col-lg-2 control-label"> شماره تیلفون</label>
                                            <div class="col-lg-10">
                                                <input type="text" onblur="setValue()" name="phone" id="phone" class="form-control" placeholder="شماره تیلفون">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="Address" class="col-lg-2 control-label">آدرس</label>
                                            <div class="col-lg-10">
                                                <textarea name="Address" onblur="setValue()"  id="Address" class="form-control" cols="60" rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cv" class="col-lg-2 control-label">ارسال فایل</label>
                                            <div class="col-lg-10">
                                                <input type="file" name="cv" id="cv" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="comment" class="col-lg-2 control-label"> کامنت  </label>
                                            <div class="col-lg-10">
                                                <textarea name="comment" onblur="setValue()" id="comment" class="form-control" cols="60" rows="5"></textarea>
                                            </div>
                                        </div>

                                    </fieldset>

                                    <fieldset title=" مرحله ۳" class="step" id="default-step-2">
                                        <legend></legend>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">اسم</label>
                                            <div class="col-lg-10">
                                                <p class="form-control-static" id="firstname_p" > </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">تخلص</label>
                                            <div class="col-lg-10">
                                                <p class="form-control-static" id="lastname_p">   </p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label"> ایمیل  </label>
                                            <div class="col-lg-10">
                                                <p class="form-control-static" id="email_p">   </p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">تاریخ تولد</label>
                                            <div class="col-lg-10">
                                                <p class="form-control-static" id="DOB_p">  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">شماره تیلفون</label>
                                            <div class="col-lg-10">
                                                <p class="form-control-static" id="phone_p" > </p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">آدرس</label>
                                            <div class="col-lg-10">
                                                <p class="form-control-static" id="Address_p">

                                                </p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label"> کامنت  </label>
                                            <div class="col-lg-10">
                                                <p class="form-control-static" id="comment_p">

                                                </p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">ارسال عکس</label>
                                            <div class="col-lg-10">
                                                <p class="form-control-static">
                                                    <img src="" id="phone_p" >
                                                </p>
                                            </div>
                                        </div>


                                    </fieldset>

                                    <input type="submit" class="finish btn btn-danger" value="ذخیره " />
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->
    </section>
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>



<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page-->
<script src="js/jquery.stepy.js"></script>


<script>

    //step wizard

    $(function () {
        $('#default').stepy({
            backLabel: 'قبل',
            block: true,
            nextLabel: 'بعد',
            titleClick: true,
            titleTarget: '.stepy-tab'
        });
    });


    function setValue(){

        $("#firstname_p").html($("#firstname").val());
        $("#lastname_p").html($("#lastname").val());
        $("#email_p").html($("#email").val());
        $("#DOB_p").html($("#DOB").val());
        $("#phone_p").html($("#phone").val());
        $("#Address_p").html($("#Address").val());
        $("#comment_p").html($("#comment").val());

        // var location =  $('#photo').attr('src');
        // console.log(location)
        // $('#phone_p').attr("src",location);

    }


</script>


</body>
</html>
