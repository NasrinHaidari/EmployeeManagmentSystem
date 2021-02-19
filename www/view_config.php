<?php

//    load database config
    require_once ("../lib/config.php");

//    check is user
    if(!isset($_SESSION['username']) || !isset($_SESSION['type']) || $_SESSION['key'] != "Home_work" ){
        header("location: ../login.php");
        exit();
    }

//    create public vareable
    $user_id    = $_SESSION['user_id'];
    $photo      = $_SESSION['photo'];
    $user_name  = $_SESSION['name']; 

    $v_obj      = new CHD();
    $crud       = new CRUD();

?>