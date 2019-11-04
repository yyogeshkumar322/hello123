<?php 
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
setcookie("uname",$uname,time()+time() + (86400 * 30));
setcookie("pwd",$pwd,time()+time() + (86400 * 30));
echo "registered successfully";
include 'login.html';
?>