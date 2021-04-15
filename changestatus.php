<?php



require('fun.php');
$con=connect();
if(sessioncheck() == false)
{
header('Location: index.html');
}
else
{
    $id=$_SESSION['loginid'];
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
    $sql="update tbl_slot set status=1 where slotid='$id'";
    if(mysqli_query($con,$sql))
    {
        die("1");
    }
    else
    {
        die("0");
    }
    }
}
?>
