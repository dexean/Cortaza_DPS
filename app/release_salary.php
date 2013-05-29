<?php

	session_start();

	include './dao/functionDAO.php';


	$username_to_pay = $_POST['username_to_pay'];
	$salary = $_POST['salary'];
	$overtime_pay = $_POST['overtime_pay'];
	$date_released = $_POST['date_released'];
	$remarks = $_POST['remarks'];

	$action = new functionDAO();
	$action->releaseSalary($username_to_pay, $salary, $overtime_pay, $date_released, $remarks);

?>