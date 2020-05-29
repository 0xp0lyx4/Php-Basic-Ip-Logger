<?php
/*
Ýnstagram: r4zly.sec
Facebook : R4zly Security
*/


$file = fopen("loglar.txt","w");
$s = "IP::";
fwrite($file,$s);
$ip = $_SERVER["REMOTE_ADDR"];
fwrite($file,$ip);
$i ="\n\n\nOpen Port::";
fwrite($file,$i);
$d = $_SERVER['REMOTE_PORT'];
fwrite($file,$d);
$os = "\n\n\nBrowser, Os, Device::";
fwrite($file,$os);
$b = $_SERVER['HTTP_USER_AGENT'];
fwrite($file,$b);
?>