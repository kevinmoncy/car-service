<?php
require('fun.php');
$con=connect();

if(sessioncheck() == true)
{
$vreg=$_POST['vreg'];
$vname=$_POST['vname'];
$vkm=$_POST['vkm'];
$date=$_POST['datename1'];
$time=$_POST['timename1'];
$id=$_SESSION['loginid'];

$q=mysqli_query($con,"SELECT * FROM `tbl_reg` WHERE `login_id`=$id") or die ("sigin in error");
$row=mysqli_fetch_array($q);
$regno=$row['reg_id'];

$q1="INSERT INTO `tbl_slot`(`reg_id`, `vregno`, `vmodel`, `mileage`,`date`,`time`) VALUES ($regno,'$vreg','$vname',$vkm,'$date','$time')";
if(mysqli_query($con,$q1))
{
    echo "success";
}
else {
    echo "fail";
}
mysqli_close($con);
?>
<script>
alert("Booking Confirmed");
location.href="ubooking.php";
</script>
<?php
}
?>
