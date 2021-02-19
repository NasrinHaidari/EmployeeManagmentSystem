<?php

    require_once ("view_config.php");

    if(isset($_POST['id'])){
        $id = $v_obj->valid($_POST['id']);
        $row = $crud->select_one("qualification"," `id` = '$id' ");
        $row = $row->fetch_array();
    }else{
        exit();
    }


?>


<input type="hidden" name="edit"  value="1">
<input type="hidden" name="rowId" value="<?php if(isset($row['id'])) echo $row['id'] ?>">

<div class="row">

    <div class="col-md-12">
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label"> نام   </label>
            <div class="col-lg-10">
                <input type="text"  class="form-control" name="name" value="<?php if(isset($row['name'])) echo $row['name']  ?>">
            </div>
        </div>
    </div>
    <br />
    <br />

    <div class="col-md-12">
        <div class="form-group">
            <label for="qual_amount" class="col-lg-2 control-label"> معاش  </label>
            <div class="col-lg-10">
                <input type="number" class="form-control" name="qual_amount" value="<?php if(isset($row['qual_amount'])) echo $row['qual_amount']  ?>">
            </div>
        </div>
    </div>

    <br />
    <br />
    <div class="col-sm-12">
        <div class="form-group">
            <label for="description" class="col-lg-2 control-label"> توضیحات </label>
            <div class="col-lg-10">
                <textarea name="description" id="description" class="form-control" cols="60" rows="5"><?php if(isset($row['description'])) echo $row['description'] ?></textarea>
            </div>
        </div>
    </div>

</div>

