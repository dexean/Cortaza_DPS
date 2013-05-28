<?php

	session_start();

	include './dao/functionDAO.php';
	
	$mode_of_employment = $_POST['mode_of_employment'];
	$classification_of_employee = $_POST['classification_of_employee'];
	$fullname = $_POST['fullname'];
	$mobile = $_POST['mobile'];	
	$username = $_POST['reg_username'];
	$password = $_POST['reg_password'];
	
	$action = new functionDAO();
	$action->register($mode_of_employment,$classification_of_employee,$fullname,$mobile,$username,$password);

