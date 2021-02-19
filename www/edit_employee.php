<?php

    require_once("view_config.php");

    if(isset($_POST['id'])){
        $id = $v_obj->valid($_POST['id']);
        $row = $crud->select_one("employee"," `id` = '$id' ");
        $row = $row->fetch_array();
    }else{
        exit();
    }


?>
<div class="row">
    <div class="col-md-12">

        <input type="hidden" value="1" name="edit" >
        <input type="hidden" value="<?php if(isset($row['id'])) echo $row['id']; ?>" name="rowId" >

        <div class="form-group">
            <label for="departments" class="col-lg-2 control-label"> دیپارتمنت  </label>
            <div class="col-lg-10">
                <select name="departments" id="departments" class="form-control">
                    <option  value=""> یکی را انتخاب کنید  </option>
                    <?php
                    $departments = $crud->select('department',' * ');
                    while ( $department =  $departments->fetch_array()){
                        if($department['id'] == $row['dp_id'])
                            echo '<option  selected="selected" value="'.$department['id'].'"> '.$department['dname'].' </option>';
                        else
                            echo '<option value="'.$department['id'].'"> '.$department['dname'].' </option>';
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <br />
    <br />
    <div class="col-md-12">
        <div class="form-group">
            <label for="status" class="col-lg-2 control-label">حالت</label>
            <div class="col-lg-10">
                <select name="status" id="status" class="form-control">
                    <option <?php if(isset($row['emp_status']) and $row['emp_status'] == "Approved" ) echo "selected"?> value="Approved">انتخاب شد</option>
                    <option <?php if(isset($row['emp_status']) and $row['emp_status'] == "rejected" ) echo "selected"?> value="rejected">رد شد</option>
                    <option <?php if(isset($row['emp_status']) and $row['emp_status'] == "Suspended" ) echo "selected"?> value="Suspended"> درتاخیر باشد</option>
                </select>
            </div>
        </div>
    </div>

</div>
