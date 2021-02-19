<?php

class CRUD{

//    function Insert with three parameters
    public function insert($table, $columns, $values) {

        $sql= "INSERT INTO $table ( $columns ) VALUES ( $values )";
        $insert= mysqli_query($GLOBALS['DB'], $sql) or die("Not executed the insert query");
        return $insert;

    }


//    function Select data from specific table
    public function select($table, $columns = '*', $conditions = '') {

        $sql= "SELECT $columns FROM $table ";

        if ($conditions !="") {
            $sql .= " WHERE $conditions ";
        }

        $rows= mysqli_query($GLOBALS['DB'], $sql) or die("Not executed the select query");
        return $rows;

    }

//    Update Function
    public function update($table, $data, $conditions) {
        $sql=
          "UPDATE
                $table
          SET
                $data
          WHERE
                $conditions
          ";

        $row = mysqli_query($GLOBALS['DB'], $sql) or die(mysqli_error($GLOBALS['DB']));

        return $row;
    }


//    function Select one record from specific table
    public function select_one($table, $conditions) {
        $sql    = "SELECT * FROM $table WHERE $conditions limit 1 ";
        $row    = mysqli_query($GLOBALS['DB'], $sql) or die("Not executed the select query");
        return $row;
    }


    public function upload_file($file_name_v , $dir_name , $last_id ){

        $extension = ['.png','.jpg','.jpeg','.PNG',".JPG",".JPEG",'.pdf','.PDF'];
        
//        check  file photo exit
        if(!empty($_FILES[$file_name_v]['name'])){

//            check folder is exit if not it will created
            if(!file_exists("../upload/$dir_name/".$last_id))
                mkdir("../upload/$dir_name/".$last_id);

//            get extension
            $ext = substr($_FILES[$file_name_v]['name'], strripos($_FILES[$file_name_v]['name'], '.'));
            
            // valid extension
            if(!in_array($ext,$extension)){
                $ext = '.png';
            }

            $file_name = $last_id."_file".$ext;
            $destination = "../upload/$dir_name/$last_id/$file_name";

//              Transfer the file
            if(move_uploaded_file($_FILES[$file_name_v]['tmp_name'],$destination)){
                $img = $destination;
            }else {
                $img="../upload/$dir_name/default.png";
            }

        }else{
            $img="../upload/$dir_name/default.png";
        }

        return $img;
    }



    public function last_id ($table){
        $sql = "SELECT count(id) as num_row FROM `$table` ";

        $number = mysqli_query($GLOBALS['DB'], $sql) or die("Not executed last id ");
        $number = $number->fetch_array()['num_row'];
        return ($number > 0 ) ? $number + 0 : 0 ;
    }


    public function count($table , $column , $condition = null ){

        $sql = "SELECT COUNT($column) AS out_number FROM $table ";

        if($condition != null ){
            $sql .= " WHERE $condition ";
        }


        $number = mysqli_query($GLOBALS['DB'], $sql) or die("Not executed count  ");
        $number = $number->fetch_array()['out_number'];
        return ($number > 0 ) ? $number + 0 : 0 ;

    }



    public function delete($table , $id ){

        $sql = "DELETE FROM `$table` WHERE  `id` = '$id'  limit 1 ";
        $deleted = mysqli_query($GLOBALS['DB'], $sql) or die(" not working delete function ");

        return $deleted;
    }




}