<?php
session_start();


include 'dao/functionDAO.php';

$action=new functionDAO();
$action->viewEmployeeData();

?>