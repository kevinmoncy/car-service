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
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Admin</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
		<style>
		 body
		 {
			 min-height: 100vh;
			 background-image: url( "images/admin1.jpg");
			 background-size: cover;
			 background-repeat: no-repeat;
			 background-position: center;
		 }
		 td, th{
			 /* background-color: rgba(0,0,0,0.25); */
			 /* vertical-align: middle !important; */
			 padding:1em .5em !important;
		 }
		 a{
			 color: black;
		 }
		</style>
	</head>
	<body class='container'>

		<div id="div1">
			<h1><center><b>ADMIN</b></center></h1>
		</div>
		<div class="menu">
			<ul>
				<li><a href="#" onclick="document.getElementById('tbl').style.display='block';document.getElementById('tbl1').style.display='none';"><span>CUSTOMER DETAILS</span></a></li>
				<li><a href="#" onclick="document.getElementById('tbl').style.display='none';document.getElementById('tbl1').style.display='block';"><span>BOOKINGS</span></a></li>
				<li><a href=""><span>VEHICLE MANAGEMENT</span></a></li>
				<li><a href="advisorreg.php"><span>ADVISOR REGISTRATION</span></a></li>
                <li><a href="areport.php"><span>REPORTS</span></a></li>
				<li><a href="logout.php">Logout</a></li>
                
			</ul>
		</div>
		<?php
		$sql1="select * from tbl_reg";
		$res1=mysqli_query($con,$sql1);
		echo "<table class='table table-responsive' id='tbl' class='table' style='display:none;'>";
		echo "<tr>";
		echo"<th>Name</th>";
		echo"<th>Address</th>";
		echo"<th>e-mail</th>";
		echo"<th>Phone</th>";
		echo"</tr>";
		while($row=mysqli_fetch_array($res1))
		{
			echo"<tr >";
			echo"<td>",$row['name'],"</td><td>&nbsp;",$row['address'],"</td><td>&nbsp;",$row['email'],"</td><td>&nbsp;",$row['phone'],"</td>";
			echo"</tr>";

		}
		echo"  </table>";
		?>



		<?php

		$q=mysqli_query($con,"SELECT * FROM `tbl_reg`") or die ("sigin in error");
		$row1=mysqli_fetch_array($q);

		echo "<table class='table table-responsive' id='tbl1' class='table' style='display:none;'>";
		echo "<tr>";
		echo"<th>Name</th>";
		echo"<th>Address</th>";
		echo"<th>Slot ID</th>";
		echo"<th>Car Registration Number</th>";
		echo"<th>Car name and Model</th>";
		echo"<th>KM Covered</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Action</th>";
		echo"</tr>";

		while($row1=mysqli_fetch_array($q))
		{

		$regno=$row1['reg_id'];
		$name=$row1['name'];


		$sql1="SELECT * FROM `tbl_slot` WHERE `reg_id`=$regno";
		$res1=mysqli_query($con,$sql1);

		while($row=mysqli_fetch_array($res1))
		{

			echo"<tr >";
			echo "<td>",$row1['name'],"</td><td>",$row1['address'],"</td><td>&nbsp;",$row['slotid'],"</td><td>&nbsp;",$row['vregno'],"</td><td>&nbsp;",$row['vmodel'],"</td><td>&nbsp;",$row['mileage'],"</td><td>&nbsp;",$row['date'],"</td><td>&nbsp;",$row['time'];
			echo "</td><td >&nbsp;";
			if($row['status']==0)
			{ ?>
				<button onclick='setaction(<?php echo $row['slotid'];?>,this)' id="<?php echo $row['slotid'];?>">Click To Approve</button>
			<?php } else {?>
				<button id=<?php echo $row['slotid']; ?> disabled>Approved</button>
			<?php }
			echo "</td></tr>";

		}
	}
		echo"  </table>";
		?>
	</body>
<script>
function setaction(id,button)
{


	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4&&this.status==200)
		{
			console.log(this.responseText);
			if(parseInt(this.responseText)==1)
			{
				button.innerHTML="Approved";
				button.disabled="true";
			}
			else if (parseInt(this.responseText)==0)
			{
				button.innerHTML="Click To Approve";
			}
		}
	};
	xhttp.open("GET","changestatus.php?id="+ id,true);
	xhttp.send();


}
</script>
	</html>
	<?php
}
?>
