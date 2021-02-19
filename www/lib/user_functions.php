<?php
include_once "config.php";
function user_login($data) {
//    var_dump($data);
    $connection=config();
    $sql="SELECT * FROM user WHERE username='$data[username]' && password='$data[password]'";
    $row= mysqli_query($connection, $sql);
    $res= mysqli_fetch_assoc($row);
//    var_dump($res);
    if($res['password']==$data['password']){
        $_SESSION['username']=$res['name'];
        header("location:index.php");
    }else{
        header("location:login.php?login=error");
    }
}


//function comment(){
//    $connection=config();
//    $sql="SELECT * FROM commentinfo";
//    $row= mysqli_query($connection, $sql);
//    while ($res= mysqli_fetch_assoc($row)){
//        $result[]= $res;
//    }
//    return $result;
//}