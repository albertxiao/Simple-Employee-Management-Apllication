<?php

session_start();
ob_start();
require_once('../config/database.php');
require_once('../models/core_model.php');
$post = @$_GET['post'];

if($post == "create"):

	$data = array(
		"email"		=> $_POST['email'],
		"password"	=> md5($_POST['password'])
	);

	$model->insert("users", $data);
	$_SESSION['alert'] = "User Ditambahkan";
	header("location: ../?content=users");

elseif($post == "delete"):
	$id = @$_GET['id'];
	$model->delete("users", "id", $id);

	$dir = "../assets/img/employee/";
	$pict_early = $model->show("employee", "user_id", $id)->fetch(PDO::FETCH_OBJ)->pict;
	unlink($dir.$pict_early);
	$_SESSION['alert'] = "User Dihapus";
	// header("location: ../?content=users");

elseif($post == "auth"):

	$email = $_POST['email'];
	$password = $_POST['password'];

	if($email == ""):

		$_SESSION['alert'] = "Email Tidak Boleh Kosong";
		header("location: ../views/authentication/login.php");
	elseif($password == ""):

		$_SESSION['alert'] = "Password Tidak Boleh Kosong";
		header("location: ../views/authentication/login.php");
	else:

		$views = $model->query("SELECT * FROM users WHERE email = '$email' AND password = md5('$password')");
		$data = $views->fetch(PDO::FETCH_OBJ);
		$id = $data->id;
		$nama = $data->email;
		$row = $views->rowCount();

		if($row > 0):
			$_SESSION['user'] = $id;
			$_SESSION['nama'] = $nama;
			header("location: ../?content=home");
		else:
			$_SESSION['alert'] = "Username Atau Password Salah";
			header("location: ../views/authentication/login.php");
		endif;
	endif;

elseif($post == "logout"):
	session_destroy();
	header("location: ../views/authentication/login.php");
endif;