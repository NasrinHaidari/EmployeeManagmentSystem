<?php
    require_once("view_config.php");
    if(isset($_POST['id'])){
        $id = $v_obj->valid($_POST['id']);
        $row = $crud->select_one(" `department` "," `id` = '$id' ");
        $row = $row->fetch_array();
    }else{
        exit();
    }
?>

<input type="hidden" value="1" name="edit" >
<input type="hidden" value="<?php if(isset($row['id'])) echo $row['id']?>" name="rowId" >
<input type="text" value="<?php if(isset($row['dname'])) echo $row['dname']?>" name="name" class="form-control">
