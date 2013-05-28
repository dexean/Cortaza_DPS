<?php
include 'dao/functionDAO.php';

$search=$_POST['search'];

$action=new functionDAO();
$action->searchEmployee($search);
?>