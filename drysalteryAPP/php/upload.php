<?php
$file = $_FILES["f"];
error_reporting(0);
//is_dir();   是用来判断某个文件夹是否存在
//mkdir()     是用来创建一个文件夹
if (!is_dir("./upload")) {
    mkdir("./upload");
};
//is_uploaded_file()    判断某个文件是否为上传的文件  接受的是上传文件的临时名称
//var_dump(is_uploaded_file("tmp_name"));
//array_pop() 类似于js中的pop方法
//time  获取当前的时间戳
$arr=explode(".", $file["name"]);
$houzhui = array_pop($arr);
$filename = md5(time() + mt_rand(0, 1000)) . "." . $houzhui;
//var_dump($filename);
//explode()   类似于js中的split将字符串转化为数组
//move_uploaded_file()    将某个上传的临时文件移动到另外一个文件夹中     参数 临时文件的name   移动到位置
if (is_uploaded_file($file["tmp_name"])) {
    move_uploaded_file($file["tmp_name"], "./upload/".$filename);
    echo "./php/upload/".$filename;
}
