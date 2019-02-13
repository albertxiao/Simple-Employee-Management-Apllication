<?php 

$content = @$_GET['content'];
$action	 = @$_GET['action'];

# Home Page
if ($content == ""):
	include 'views/partials/home.php';
elseif($content == "home"):
	include 'views/partials/home.php';

# Employee Page
elseif ($content == "employees"):
	if($action == "new_employee"):
		include 'views/employees/new_employee.php';
	elseif($action == "show_employee"):
		include 'views/employees/show_employee.php';
	elseif($action == "search_employee"):
		include 'views/employees/search_employee.php';
	else:
		include 'views/employees/employees.php';
	endif;

# User Page
elseif($content == "users"):
	if($action == "new_user"):
		include 'views/users/new_user.php';
	else:
		include 'views/users/users.php';
	endif;

# Profile Page
elseif($content == "profile"):
	if($action == "edit_profile"):
		include 'views/profile/edit_profile.php';
	else:
		include 'views/profile/profile.php';
	endif;
endif;

?>