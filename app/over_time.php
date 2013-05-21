<?php
session_start();

include'dao/functionDAO.php';


$username = $_SESSION['username'];

//$time_out = $_POST['time_out'];

$action = new functionDAO();
$action->over_time($username,/*remarks*/);

?>