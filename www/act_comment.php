<?php


require_once ("view_config.php");

if(isset($_POST['insert'])){

    $id = $v_obj->valid($_POST['rowId']);
    $status_data = $v_obj->valid($_POST['status_data']);

    $update = $crud->update('commentinfo' , " `status` = '$status_data' , `user_id` = '$user_id'  " ," `id` = '$id' ");

    if($update){
        header("location: each_comment.php?update&updateId=$id");
        exit();
    }else{
        header("location: each_comment.php?error&updateId=$id");
        exit();
    }


}





?>