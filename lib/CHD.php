<?php


class CHD
{

    // function to validate data
    public function valid($data){

        if(empty($data))
            return '';

        $data   =   trim($data);
        $data   =   stripslashes($data);
        $data   =   htmlspecialchars($data);
        $data   =   strip_tags($data);
        $data   =  mysqli_real_escape_string($GLOBALS["DB"], $data);

        return $data;
    }


}