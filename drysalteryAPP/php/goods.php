<?php
/**
 * Created by PhpStorm.
 * User: SunDan
 * Date: 2018/10/17
 * Time: 14:42
 */
header("content-type:text/html,charset=utf-8");
$mysqli=new mysqli("localhost","root","","drysaltery");
$sql="set names utf8";
$mysqli->query($sql);
$sql="select * from goods";
$r=$mysqli->query($sql);
$r=$r->fetch_all(MYSQLI_ASSOC);
echo json_encode($r);