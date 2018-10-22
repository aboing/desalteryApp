<?php
/**
 * Created by PhpStorm.
 * User: SunDan
 * Date: 2018/9/26
 * Time: 20:43
 */
header("content-type:text/html,charset=utf-8");
$mysqli = new mysqli("localhost", "root", "", "drysaltery");
$sql = "set names utf8";
$mysqli->query($sql);
$username = $_POST["username"];
$password = $_POST["password"];
$sql = "select * from admin";
$r = $mysqli->query($sql);
$r = $r->fetch_array(MYSQLI_ASSOC);
if ($username == $r["username"]) {
    if ($password == $r["password"]) {
        echo 1;
    } else {
        echo 2;
    }
} else {
    echo 3;
}


