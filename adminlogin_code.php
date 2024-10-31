<?php

include("connect.php");
$email = $_POST['email'];
session_start();
$password = $_POST['password'];


$q = "select * from admin where email='$email' and password='$password'";
$rs = mysqli_query($cn, $q);
if ($row = mysqli_fetch_array($rs)) {
     $_SESSION['a_id'] = $row['a_id'];
     header('location:adminhome.php');
} else {
     header('location:adminlogin.php?msg=y');
}
