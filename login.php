<?php

if(isset($_COOKIE['userName']) and isset($_COOKIE['password'])){
    header("location: is_login.php");
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
    <link rel="shortcut icon" href="www/img/favicon.html">

    <?php
    $title ="صحفه ورودی ";
    include_once 'www/include/title.php';
    ?>

    <!-- Bootstrap core CSS -->
    <link href="www/css/bootstrap.min.css" rel="stylesheet">
    <link href="www/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="www/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="www/css/style.css" rel="stylesheet">
    <link href="www/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="www/js/html5shiv.js"></script>
    <script src="www/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="is_login.php" method="POST">
        <h2 class="form-signin-heading">همین حالا وارد شوید</h2>
        <div class="login-wrap">
            <input type="text" name="username" class="form-control" placeholder="نام کاربری" autofocus>
            <input type="password" name="password"  class="form-control" placeholder="کلمه عبور">
            <label class="checkbox">
                <input type="checkbox" name="remeberme" value="1"> مرا به خاطر بسپار
                <span class="pull-right"> <a href="#"> کلمه عبور را فراموش کرده اید؟</a></span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit" name="btn">ورود</button>
        </div>
    </form>

</div>


</body>
</html>
