<?php
include("connect.php");
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$q = "insert into feedback(name,email,msg) values('$name','$email','$msg')";
mysqli_query($cn, $q);
// print $q;
header("location:vproduct.php");
