<?php

    require_once ("view_config.php");
    if(isset($_POST['insert'])){

        $id         = $v_obj->valid($_POST['em_id']);
        $dp_id      = $v_obj->valid($_POST['departments']);
        $status     = $v_obj->valid($_POST['status']);

        $update     = $crud->update('employee'," `dp_id` = '$dp_id' , `emp_status` = '$status' " , " id = '$id'");

        if($update){
            header("location: chooseemployee.php?saved");
            exit();
        }else{
            header("location: chooseemployee.php?error");
            exit();
        }
    }

    if(isset($_GET['deleted'])){

        $id = $v_obj->valid($_GET['id']);
        $delete = $crud->delete('employee',$id);

        if($delete){
            header("location: employee.php?deleted");
            exit();
        }else{
            header("location: employee.php?error");
            exit();
        }
    }

    if(isset($_POST['edit'])){

        $id         = $v_obj->valid($_POST['rowId']);
        $dp_id      = $v_obj->valid($_POST['departments']);
        $status     = $v_obj->valid($_POST['status']);

        $update     = $crud->update('employee'," `dp_id` = '$dp_id' , `emp_status` = '$status' " , " id = '$id'");

        if($update){
            header("location: employee.php?update");
            exit();
        }else{
            header("location: employee.php?error");
            exit();
        }


    }





?>