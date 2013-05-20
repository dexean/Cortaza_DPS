<?php 
session_start();
include 'dao/functionDAO.php';

$username = $_SESSION['username'];


$action = new functionDAO();
$action->viewing_attendance($username);

?>