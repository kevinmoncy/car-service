<?php
require('fun.php');
$u= $_POST["pass"];
if (sessioncheck() == true)
{
$u= $_POST["pass"];
$con = connect();
if(!empty($_POST["pass"])) {
  $lid=$_SESSION['loginid'];
  $query = mysqli_query($con,"SELECT * FROM `tbl_log` WHERE `login_id`=$lid AND `password`='$u'")or die("Sign in Error");
    ?>
    <script>
        console.log("<?php echo $lid; ?>");
        console.log("<?php echo $pass; ?>");
      
        </script>
    <?php
 if(mysqli_num_rows($query) > 0)
 {
     echo "1";
  }
    else{
    echo "0";
  }
}
}
else
{
 echo "0";
}
?>
