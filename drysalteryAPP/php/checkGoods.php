<?php
/**
 * Created by PhpStorm.
 * User: SunDan
 * Date: 2018/10/17
 * Time: 17:43
 */


header("content-type:text/html,charset=utf-8");
$id=$_POST["id"];
$mysqli=new mysqli("localhost","root","","drysaltery");
$sql="set names utf8";
$mysqli->query($sql);
$sql="select * from goods where id=$id";
$r=$mysqli->query($sql);
$r=$r->fetch_array(MYSQLI_ASSOC);
echo json_encode($r);