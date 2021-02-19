<?php

require_once ("view_config.php");
if(isset($_POST['insert'])){

    $emp_id  = $v_obj->valid($_POST['emp_id']);
    $qualification  = $v_obj->valid($_POST['qualification']);
    $date_acheived  = $v_obj->valid($_POST['date_acheived']);
    $date_expired   = $v_obj->valid($_POST['date_expired']);


    $insert = $crud->insert(
        'emp_qualification',
        ' `date_acheived` , `date_expired` , `emp_id` , `qual_id` , `user_id` ' ,
        " '$date_acheived' , '$date_expired' , '$emp_id' , '$qualification' , '$user_id'  "
    );

    if($insert){
        header("location: emp_qualificaion.php?saved");
        exit();
    }else{
        header("location: emp_qualificaion.php?error");
        exit();
    }

}








?>