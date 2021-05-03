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
<script>
        console.log("<?php echo $_SESSION['loginid']; ?>");
      
        </script>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Diego Velázquez">
  <meta name="description" content="Tablero con Bootstrap 4 - Webook">

  <title>Customer</title>
  
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <!-- Bootstrap Css -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Hoja de estilos -->
  <link href="css/styledash.css" rel="stylesheet">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:400,700&display=swap" rel="stylesheet">

  <!-- Ionic icons -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="content-wrapper">

    <!-- Sidebar -->
    <div id="sidebar-container" class="bg-light border-right">
      <div class="logo">
        <h4 class="font-weight-bold mb-0"><a href="admin_dashboard.php">WELCOME</a></h4>
      </div>
      <div class="menu list-group-flush">
          <a href="ubooking.php" class="list-group-item list-group-item-action text-muted bg-light p-3 border-0"> BOOKINGS</a>
          <a href="#" class="list-group-item list-group-item-action text-muted bg-light p-3 border-0"> VEHICLE STATUS</a>
          <a href="notification.php" class="list-group-item list-group-item-action text-muted bg-light p-3 border-0">NOTIFICATIONS</a>
          <a href="uaccdetails.php" class="list-group-item list-group-item-action text-muted bg-light p-3 border-0"> ACCOUNT DETAILS</a>
          <a href="uprofile.php" class="list-group-item list-group-item-action text-muted bg-light p-3 border-0"> EDIT YOUR PROFILE</a>
      </div>
    </div>
    <!-- Fin sidebar -->

    <!-- Page Content -->
    <div id="page-content-wrapper" class="w-100 bg-light-blue">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Account Settings
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#EdiPassModal">change password</a>

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-target=".bs-example-modal-sm" data-toggle="modal">Log Out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="content" class="container-fluid p-5">
        <section class="py-3">
          <!-- Highlights -->

          <table class="table">
  <thead>
    <tr>
      <th scope="col">Si No</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $q=mysqli_query($con,"SELECT * FROM `tbl_reg` WHERE `login_id`=$id") or die ("sigin in error");
      $c=1;
      while($row=mysqli_fetch_array($q))
      {
       ?>
    <tr>
      <th scope="row"><?php echo $c++; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['phone']; ?></td>
    </tr>
<?php } ?>
  </tbody>
</table>

        </section>
      </div>
    </div>
    <!-- Fin Page Content -->
  </div>
  <!-- Fin wrapper -->

  <!-- Bootstrap y JQuery -->
  
  <script src="js/bootstrap.min.js"></script>

  <!-- Abrir / cerrar menu -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#content-wrapper").toggleClass("toggled");
    });
  </script>


    
    <!-- edit password Modal  -->
<div class="modal fade" id="EdiPassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="resetPass.php" method="POST">
      <!-- Modal body -->
      <div class="modal-body">
            <input class="form-control" type="password" name="cpass1" id="cpass1"   placeholder="Enter Current Password" required>
            <span id="msg1"></span>
            <br>
                <input class="form-control" type="password" name="npass1" id="npass1"  disabled oninput="valFPasswod()" placeholder="New Password" required>
            <br>
                <input class="form-control" type="password" name="ncpass1" id="ncpass1"  disabled="true" oninput="valCFPasswod()"  placeholder="Confirm New Password" required>
            <br>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" value="Update" id="Epass" disabled class="btn btn-primary" />
      </div>
      </form>
    </div>
  </div>
</div>
<!-- edit password Modal  ends -->
    
    

  <div tabindex="-1" class="modal bs-example-modal-sm" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header"><h4>Logout <i class="fa fa-lock"></i></h4></div>
      <div class="modal-body"><i class="fa fa-question-circle"></i> Are you sure you want to log-off?</div>
      <div class="modal-footer"><a class="btn btn-primary btn-block" href="logout.php">Logout</a></div>
    </div>
  </div>
</div>

    <script>										

											
$(document).ready(function(){
  $("#cpass1").blur(function(){
      
    var pass1 = $("#cpass1").val();
      alert(pass1);
        $.ajax({
                url:"EditPassword.php",
                method:"post",
                data:{pass:pass1},
                success:function(data){
                if(data==1)
                    {
                        alert("if");
                    $("#npass1").removeAttr("disabled");
                    $("#ncpass1").removeAttr("disabled");
                    }
                    if(data==0)
                    {
                        alert("2");
                    $("#npass1").attr("disabled", "disabled");
                    $("#ncpass1").attr("disabled", "disabled");
                    }
                }
           });
  });
});

function checkPassword(text){
    return (/^.{8,}$/.test(text));
}
var t=[0,0];

function valFPasswod()
    {
        var mu = document.getElementsByName('npass1')[0];
            if (checkPassword(mu.value)){
                document.getElementById("npass1").style.borderColor = "green";
                t[0]=1;
            }
            else
                {
                document.getElementById("npass1").style.borderColor = "red";
                t[0]=0;
            }
        button2();
    }

function valCFPasswod()
    {
        var mc = document.getElementsByName('ncpass1')[0];
        var mu = document.getElementsByName('npass1')[0];
            if ((checkPassword(mc.value))&&(mc.value == mu.value)&&(mc.value!= null)){
                document.getElementById("ncpass1").style.borderColor = "green";
                t[1]=1;
            }
            else
                {
                document.getElementById("ncpass1").style.borderColor = "red";
                t[1]=0;
            }
        button2();
    }

function button2()
{
    var l = t.length;
    var s=0;
    for(var i=0;i<l;i++)
    {
        s=s+t[i];
    }
    if(l==s)
    {
        document.getElementById("Epass").disabled = false;
    }
    else
    {
         document.getElementById("Epass").disabled = true;
    }
}

</script>


</body>

</html>
<?php
}
?>
