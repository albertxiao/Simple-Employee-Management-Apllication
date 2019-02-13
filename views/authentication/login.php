<?php
	session_start();
	if (@$_SESSION['user']):
		header("location: ../../?content=home");
	endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Kepegawaian</title>
</head>
<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/sign-in.css">
<body class="text-center">
    <form class="form-signin" action="../../controllers/auth_controller.php?post=auth" method="POST">
	  <h1 class="h3 mb-3 font-weight-normal">Login Page</h1>
	  <?php
		if(@$_SESSION['alert'])
		{
			echo "<div class='alert alert-danger'>".$_SESSION['alert']."</div>";
			unset($_SESSION['alert']);
		}
	  ?>
	  <div class="form-group">
	  	<label for="email" class="sr-only">Email address</label>
	  	<input type="email" id="email" class="form-control" placeholder="Masukan Email" name="email" autofocus>
	  </div>
	  
	  <div class="form-group">
	  	<label for="password" class="sr-only">Password</label>
	  	<input type="password" id="password" class="form-control" placeholder="Masukan Password" name="password">
	  </div>
	  
	  <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
	  <p class="mt-5 mb-3 text-muted">&copy; Remidi</p>
	</form>
</body>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/popper.min.js" ></script>
</html>
