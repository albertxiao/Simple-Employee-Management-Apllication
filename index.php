<?php 
session_start();
if (@$_SESSION['user']):
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Kepegawaian</title>
</head>
<?php include_once("views/partials/header.php"); ?>
<body>
	<?php include_once("views/partials/menu.php"); ?>
	<br>
	<div class="container">
		<div class="row">
			<?php include_once("views/partials/content.php"); ?>
		</div>
	</div>
</body>
<?php include_once("views/partials/footer.php"); ?>
</html>
<?php 

else:
	header("Location: views/authentication/login.php");
endif;
?>
