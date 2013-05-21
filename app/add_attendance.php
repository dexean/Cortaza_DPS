<?php
session_start();

include'dao/functionDAO.php';


$username = $_SESSION['username'];

$time_in = $_POST['time_in'];
$date_time_in = $_POST['date_checked'];

$action = new functionDAO();
$action->time_in($username, $time_in, $date_checked);

?>