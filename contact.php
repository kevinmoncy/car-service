<?php
require('fun.php');
$con=connect();


$name=$_POST['cname'];
$email=$_POST['cemail'];
$comment=$_POST['ccomment'];

//$q1="INSERT INTO `tbl_contact`(`name`, `email`, `comment`) VALUES ($cname,'$cemail','$ccomment')";
$q = mysqli_query($con,"INSERT INTO `tbl_contact`(`name`, `email`, `comment`) VALUES ('$name','$email','$comment')")or die("Sign in Error");

?>
<script>
location.href="index2.php";
        </script>
