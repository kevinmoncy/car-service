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
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Diego Velázquez">
  <meta name="description" content="Tablero con Bootstrap 4 - Webook">

  <title>ADVISOR</title>

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
        <h4 class="font-weight-bold mb-0"><a href="admin.php">WELCOME</a></h4>
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
                <!-- <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Account Settings
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">change password</a>

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-target=".bs-example-modal-sm" data-toggle="modal">Log Out</a>
                </div> -->
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="content" class="container-fluid p-5">
        <section class="py-3">
          <!-- Highlights -->
          <div class="row">
            <div class="col-md-12">



          <div class="form-group">
            <!-- <label for="exampleInputPassword1">Address </label> -->
            <!-- <input type="text" class="form-control" id="address" placeholder="" required> -->
            <!-- <textarea class="form-control" id="address" rows="4" cols="50" required>Enter Address</textarea> -->
            <!-- <small class="form-text text-muted">Street Address</small> -->
          </div>
          <!-- <div class="form-group">
            <input type="text" class="form-control" id="address" required>
            <small class="form-text text-muted">Street Address Line 2 </small>
          </div> -->
          <div class="row">


                  <!-- <div class="col-md-3 mb-3">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required>
                    <div class="invalid-feedback">
                      Zip code required.
                    </div>
                  </div> -->
                </div>
               <h4 class="mb-3">ADVISOR REGISTRATION</h4>
               <form method="POST" action="advisor_reg.php">

             <div class="form-group">
            <label for="exampleInputEmail">NAME</label>
            <input type="text" id="aname" class="form-control" name='aname' placeholder="NAME" onkeypress="return /[a-zA-Z ]/i.test(event.key)" required>
            </div>

            <div class="form-group">
           <label for="exampleInputEmail5">ADDRESS</label>
           <input type="text" class="form-control" id="aadd" name="aadd" onkeypress="return /[a-zA-Z(), ]/i.test(event.key)" placeholder="ADDRESS" required>
           </div>
		   <div class="form-group">
		   <label for="exampleInputEmail5">PHONE</label>
		   <input type="text" class="form-control" id="aphone" name="aphone" onkeypress="return /[0-9]/i.test(event.key)" placeholder="PHONE" required>
		   </div>
		   <div class="form-group">
		  <label for="exampleInputEmail5">EMAIL</label>
		  <input type="email" class="form-control" id="aemail" name="aemail" onkeypress="" placeholder="EMAIL" required>
		  </div>
		  <div class="form-group">
		  <label for="exampleInputEmail5">USERNAME</label>
		  <input type="text" class="form-control" id="auser" name="auser" onkeypress="" placeholder="USERNAME" required>
		  </div>
		  <div class="form-group">
		  <label for="exampleInputEmail5">PASSWORD</label>
		  <input type="password"  disabled class="form-control" id="vname" name="vname" onkeypress="" placeholder="123456789" required>
		  </div>


        <hr class="mb-4">
          <input type="submit" class="btn btn-primary btn-lg btn-block" value="submit" />
          </form>
            </div>
          </div>

        </section>
      </div>
    </div>
    <!-- Fin Page Content -->
  </div>
  <!-- Fin wrapper -->

  <!-- Bootstrap y JQuery -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- Abrir / cerrar menu -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#content-wrapper").toggleClass("toggled");
    });
  </script>


  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Changing Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <input type="text" class="form-control" id="exampleInputPassword10" placeholder="current password">
         <br>
                  <input type="text" class="form-control" id="exampleInputPassword11" placeholder="new password">
                  <br>
                           <input type="text" class="form-control" id="exampleInputPassword12" placeholder="confirm your new password ">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <div tabindex="-1" class="modal bs-example-modal-sm" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header"><h4>Logout <i class="fa fa-lock"></i></h4></div>
      <div class="modal-body"><i class="fa fa-question-circle"></i> Are you sure you want to log-off?</div>
      <div class="modal-footer"><a class="btn btn-primary btn-block" href="logout.php">Logout</a></div>
    </div>
  </div>
</div>


</body>

</html>
<?php
}
?>
