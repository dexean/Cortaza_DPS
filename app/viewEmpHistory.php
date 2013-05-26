<?php

include './dao/functionDAO.php';


$username = $_SESSION['username'];


$action = new functionDAO();
$action->viewEmploymentHistory($username);


?>