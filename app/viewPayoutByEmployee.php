<?php
session_start();
include_once './dao/functionDAO.php';


$username = $_SESSION['username'];

$action = new functionDAO();
$action->viewPayoutByEmp($username);
?>