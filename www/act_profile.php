<?php

    require_once("view_config.php");

    if(isset($_POST['edit'])){

        $name       = $v_obj->valid($_POST['name']);
        $lastname   = $v_obj->valid($_POST['lastname']);
        $email      = $v_obj->valid($_POST['email']);
        $phone      = $v_obj->valid($_POST['phone']);
        $username   = $v_obj->valid($_POST['username']);
        $password   = $v_obj->valid($_POST['password']);

        $update     = $crud->update('user'," `name` = '$name' , `lastname` = '$lastname' , `email` = '$email' , `phone` = '$phone' , `username` = '$username' , `password` = '$password'  ", " `id` = '$user_id' ");

        if($update){
            header("location: profile.php?update");
            exit();
        }else {
            header("location: profile.php?error");
            exit();
        }

    }










?>