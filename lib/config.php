<?php
//set true if Environment is Production else false
// define("IS_ENV_PRODUCTION", false);

// check for Production environment
// if(!IS_ENV_PRODUCTION){ // It means in Development environment
//     error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
// }

// display_errors
// ini_set("display_errors", !IS_ENV_PRODUCTION); //althought error exist but doesnt show error

// Logs error
// ini_set("error_log", "../log/log.txt");


session_start();
ob_start();

// set timezone from Berlin to Kabul
date_default_timezone_set("Asia/Kabul");

// Connect to Server
    define("DB_HOST","localhost");
    define("DB_USER","root");
    define("DB_PASSWORD","");
    define("DB_NAME","employeemanagesystem");
    $GLOBALS['DB'] = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if(!$GLOBALS['DB']){
        echo "Debagging Error Code: ".mysqli_connect_errno();
        echo "<br> Error Message: ".mysqli_connect_error();
        exit("<br> can not connect to Database!!!");
    }
    $GLOBALS['DB']->set_charset('UTF8');


    require_once("crud.php");
    require_once("CHD.php");

//    My code
//    function config() {
//        $server= "localhost";
//        $user= "root";
//        $password= "";
//        $db="employemanagmentsystem";
//
//        $connection= mysqli_connect($server, $user, $password, $db);
//        mysqli_set_charset($connection, "utf8");
//        mysqli_query($connection, "SET NAMES 'utf8'");
//        return $connection;
//
//    }

//function comment(){
//        $connection=config();
//        $sql="SELECT * FROM commentinfo";
//        $row= mysqli_query($connection, $sql);
//        while ($res= mysqli_fetch_assoc($row)){
//            $result[]= $res;
//        }
//        return $result;
//    }
?>