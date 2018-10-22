<?php
/**
 * Created by PhpStorm.
 * User: SunDan
 * Date: 2018/10/12
 * Time: 18:19
 */
header("content-type:text/html,charset=utf-8");
$mysqli=new mysqli("localhost","root","","drysaltery");
$sql="set names utf8";
$mysqli->query($sql);
$sql="select Cname,id from customer";
$r=$mysqli->query($sql);
$r=$r->fetch_all(MYSQLI_ASSOC);
echo json_encode($r);