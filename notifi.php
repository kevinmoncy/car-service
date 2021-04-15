<?php
require('fun.php');
$con=connect();
$n=$_POST['txt1'];
$q1="INSERT INTO `notify`(`text`) VALUES ('$n')";
mysqli_query($con,$q1);
mysqli_close($con);
?>
