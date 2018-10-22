<?php
/**
 * Created by PhpStorm.
 * good: SunDan
 * Date: 2018/10/17
 * Time: 18:47
 */

header("content-type:text/html,charset=utf-8");
$mysqli=new mysqli("localhost","root","","drysaltery");
$goodname=$_POST["goodname"];
$goodspec=$_POST["goodspec"];
$goodunit=$_POST["goodunit"];
$image=$_POST["image"];
$gooddesc=$_POST["gooddesc"];
$goodprice=$_POST["goodprice"];
$id=$_SERVER["QUERY_STRING"];
$sql="set names utf8";
$mysqli->query($sql);
$sql="update goods set goodname='$goodname',goodspec='$goodspec',goodunit='$goodunit',image='$image',gooddesc='$gooddesc',goodprice='$goodprice' where id=$id";
$mysqli->query($sql);
$r=$mysqli->affected_rows;
if($r==1){
    echo 1;
}else{
    echo 0;
}