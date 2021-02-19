<?php

    require_once('view_config.php');
    if(isset($_POST['insert'])){

        $name = $v_obj->valid($_POST['name']);
        $time = date("Y-m-d  H:i:s");

        $insert = $crud->insert('department',' `dname` , `Dstart_up` , `user_id` '  , " '$name' , '$time' , '$user_id' ");

        if($insert){
            header("location: department.php?saved");
            exit();
        }else {
            header("location: department.php?error");
            exit();
        }

    }


    if(isset($_GET['deleted'])){

        $id = $v_obj->valid($_GET['id']);

        $delete = $crud->delete("department" , $id);

        if($delete){
            header("location: department.php?deleted");
            exit();
        }else {
            header("location: department.php?error");
            exit();
        }

    }

    if(isset($_POST['edit'])){

        $id = $v_obj->valid($_POST['rowId']);
        $name = $v_obj->valid($_POST['name']);

        $update = $crud->update('department', " `dname` = '$name' ", " `id` = '$id' ");

        if($update){
            header("location: department.php?update");
            exit();
        }else {
            header("location: department.php?error");
            exit();
        }

    }


?>