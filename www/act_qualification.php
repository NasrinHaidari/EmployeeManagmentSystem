<?php

    require_once ("view_config.php");

    if(isset($_POST['insert'])){

        $name        = $v_obj->valid($_POST['name']);
        $qual_amount = $v_obj->valid($_POST['qual_amount']);
        $description = $v_obj->valid($_POST['description']);

        $insert = $crud->insert('`qualification`' , ' `name` , `description` , `qual_amount` , `user_id` ' , " '$name' , '$description' , '$qual_amount' , '$user_id' " );

        if($insert){
            header("location: add_qualification.php?saved");
            exit();
        }else{
            header("location: add_qualification.php?error");
            exit();
        }
    }


    if(isset($_GET['deleted'])){

        $id = $v_obj->valid($_GET['id']);

        $delete = $crud->delete('qualification' , $id);

        if($delete){
            header("location: add_qualification.php?deleted");
            exit();
        }else{
            header("location: add_qualification.php?error");
            exit();
        }

    }


    if(isset($_POST['edit'])){

        $id          = $v_obj->valid($_POST['rowId']);

        $name        = $v_obj->valid($_POST['name']);
        $qual_amount = $v_obj->valid($_POST['qual_amount']);
        $description = $v_obj->valid($_POST['description']);

        $update = $crud->update('qualification' , " `name` = '$name' , `qual_amount` = '$qual_amount' , `description` = '$description' "," `id` = '$id' ");


        if($update){
            header("location: add_qualification.php?update");
            exit();
        }else{
            header("location: add_qualification.php?error");
            exit();
        }

    }




?>