<?php

session_start();

include './dao/functionDAO.php';

$username = $_SESSION['username'];

$date_of_employment = $_POST['date_of_employment'];
$company_name = $_POST['company_name'];
$company_address = $_POST['company_address'];
$company_phone = $_POST['company_phone'];
$company_email = $_POST['company_email'];
$position = $_POST['position'];
$salary = $_POST['salary'];

$action = new functionDAO();
$action->add_employment_history($date_of_employment,$company_name,$company_address,$company_phone,$company_email,$position,$salary);

?>