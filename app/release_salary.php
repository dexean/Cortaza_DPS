<?php

session_start();

include './dao/functionDAO.php';


$action = new functionDAO();
$action->releaseSalary($username_to_pay, $salary, $overtime_pay, $date_released, $remarks);

?>