<?php
/**
 * Created by PhpStorm.
 * User: SunDan
 * Date: 2018/10/12
 * Time: 23:13
 */
header("content-type:text/html,charset=utf-8");
$mysqli=new mysqli("localhost","root","","drysaltery");
$username=$_POST["username"];
$userphone=$_POST["userphone"];
$useraddress=$_POST["useraddress"];
$id=$_SERVER["QUERY_STRING"];
$sql="set names utf8";
$mysqli->query($sql);
$sql="update customer set Cname='$username',Ctel='$userphone',Caddress='$useraddress' where id=$id";
$mysqli->query($sql);
$r=$mysqli->affected_rows;
if($r==1){
    echo 1;
}else{
    echo 0;
}