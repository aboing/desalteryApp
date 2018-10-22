<?php
/**
 * Created by PhpStorm.
 * User: SunDan
 * Date: 2018/10/10
 * Time: 19:12
 */
header("content-type:text/html,charset=utf-8");
$mysqli = new mysqli("localhost", "root", "", "drysaltery");
$Cname = $_POST["username"];
$Ctel = $_POST["userphone"];
$Caddress = $_POST["useraddress"];
$sql = "set names utf8";
$mysqli->query($sql);
$sql1 = "select * from customer";
$a = $mysqli->query($sql1);
$a = $a->fetch_all(MYSQLI_ASSOC);
$arr = array();
foreach ($a as $v) {
    $arr = $v;
}
if (in_array($Cname, $arr) !== false) {
    echo 0;
} else {
    $sql = "insert into customer(Cname,Ctel,Caddress) values ('$Cname','$Ctel','$Caddress')";
    $r = $mysqli->query($sql);
    if ($mysqli->affected_rows) {
        echo 1;
    } else {
        echo 2;
    }
}

