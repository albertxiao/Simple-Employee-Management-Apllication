<?php

session_start();
require_once('../config/database.php');
require_once('../models/core_model.php');
$post 			= @$_GET['post'];
$employee_id 	= $_POST['id'];
$user_id 		= $_POST['user_id'];

if($post == "update_general"):

	@$pict = $_FILES['pict']['name'];
	@$extention = explode(".", $_FILES['pict']['name']);
	@$pict_name = "employee-".round(microtime(true)).".".end($extention);
	@$source  = $_FILES['pict']['tmp_name'];
	$dir = "../assets/img/employee/";
	$upload = move_uploaded_file($source, $dir.$pict_name);

	$id = array("id" => $employee_id);
	$data = array(
		"name"			=> $_POST['name'],
		"address"		=> $_POST['address'],
		"date_of_birth"	=> $_POST['date_of_birth'],
		"phone"			=> $_POST['phone'],
		"status"		=> $_POST['status'],
		"gender"		=> $_POST['gender'],
		"email"			=> $_POST['email'],
 	);

 	if($upload == true) {
		$pict_early = $model->show("employee", "id", $employee_id)->fetch(PDO::FETCH_OBJ)->pict;
		@unlink($dir.$pict_early);
		$data['pict'] = $pict_name;

		$model->update("employee", $data, $id);
	} else {
		$model->update("employee", $data, $id);
	}
	header("Location: ../?content=employees&action=show_employee&id=".$user_id."");

elseif($post == "update_job"):

	$id = array("employee_id" => $employee_id);
	$data = array(
		"number_id"		=> $_POST['number_id'],
		"date_of_entry"	=> $_POST['date_of_entry'],
		"position"		=> $_POST['position'],
		"salary"		=> $_POST['salary'],
		"team_unit"		=> $_POST['team_unit']
	);

	$model->update("employee_job", $data, $id);
	header("Location: ../?content=employees&action=show_employee&id=".$user_id."");

elseif($post == "update_edu"):

	$id = array("employee_id" => $employee_id);
	$data = array(
		"primary_school"		=> $_POST['primary_school'],
		"junior_high_school"	=> $_POST['junior_high_school'],
		"senior_high_school"	=> $_POST['senior_high_school'],
		"college"				=> $_POST['college']
	);

	$model->update("employee_edu", $data, $id);
	header("Location: ../?content=employees&action=show_employee&id=".$user_id."");

elseif($post == "update_auth"):

	$id = array("id" => $user_id);
	$data = array(
		"email"	 	=> $_POST['email'],
		"password"	=> md5($_POST['password'])
	);

	$model->update("users", $data, $id);
	header("Location: ../?content=employees&action=show_employee&id=".$user_id."");

elseif($post == "update_profile"):

	@$pict = $_FILES['pict']['name'];
	@$extention = explode(".", $_FILES['pict']['name']);
	@$pict_name = "employee-".round(microtime(true)).".".end($extention);
	@$source  = $_FILES['pict']['tmp_name'];
	$dir = "../assets/img/employee/";
	$upload = move_uploaded_file($source, $dir.$pict_name);

	$id = array("id" => $employee_id);
	$data = array(
		"name"			=> $_POST['name'],
		"address"		=> $_POST['address'],
		"date_of_birth"	=> $_POST['date_of_birth'],
		"phone"			=> $_POST['phone'],
		"status"		=> $_POST['status'],
		"gender"		=> $_POST['gender'],
		"email"			=> $_POST['email'],
 	);

 	if($upload == true) {
		$pict_early = $model->show("employee", "id", $employee_id)->fetch(PDO::FETCH_OBJ)->pict;
		unlink($dir.$pict_early);
		$data['pict'] = $pict_name;

		$model->update("employee", $data, $id);
	} else {
		$model->update("employee", $data, $id);
	}
	header("Location: ../?content=profile&id=".$user_id."");

endif;