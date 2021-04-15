<?php
require('fun.php');
$con = connect();
session_start();


$password=$_POST["password"];
$username=$_POST["username"];
$sql="select * from tbl_log where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);


if(mysqli_num_rows($result)>0)
{
	$row=mysqli_fetch_array($result);
	if ($row['usertype'] == 'admin' and $row['status'] == 1){
		$_SESSION['loginid'] = $row['login_id'];
        $_SESSION['name']=$username;
		echo "admin;";
        header('Location:admin.php');
	}
	else if($row['usertype'] == 'user' and $row['status'] == 1)
    {
		$_SESSION['loginid'] = $row['login_id'];
        $_SESSION['name']=$username;
    	header("Location:admin_dashboard.php");
    }
	else if($row['usertype'] == 'adv' and $row['status'] == 1)
    {
		$_SESSION['loginid'] = $row['login_id'];
        $_SESSION['name']=$username;
    	header("Location:advisor.php");
    }
}
else {

	?>
	<script>
	alert("No User Registered");
	window.location.replace("login.html");
	</script>
	<?php
	//header("Location:login.html");
}
?>
