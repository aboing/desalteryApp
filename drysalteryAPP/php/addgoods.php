<?php
/**
 * Created by PhpStorm.
 * User: SunDan
 * Date: 2018/10/14
 * Time: 18:49
 */
header("content-type:text/html,charset=utf-8");
$mysqli = new mysqli("localhost", "root", "", "drysaltery");
$sql = "set names utf8";
$mysqli->query($sql);
$goodname=$_POST["goodname"];
$goodspec=$_POST["goodspec"];
$goodunit=$_POST["goodunit"];
$image=$_POST["image"];
$gooddesc=$_POST["gooddesc"];
$goodprice=$_POST["goodprice"];
$sql1 = "select * from goods";
$a = $mysqli->query($sql1);
$a = $a->fetch_all(MYSQLI_ASSOC);
$arr = array();
foreach ($a as $v) {
    $arr = $v;
}
if (in_array($goodname, $arr) !== false) {
    echo 0;
}else{
    $sql="insert into goods(goodname,goodspec,goodunit,image,gooddesc,goodprice) values ('$goodname','$goodspec','$goodunit','$image','$gooddesc','$goodprice')";
    $mysqli->query($sql);
    $r=$mysqli->affected_rows;
    if($r){
        echo 1;
    }else{
        echo 2;
    }
}


