<?php
$user=$_POST['uname'];
$pwd=$_POST['pwd'];
if($user==$_COOKIE['uname'] && $pwd==$_COOKIE['pwd'])
header('location:success.php');
else
{
echo "Invalid credentials";
include 'index.html';
}
?>