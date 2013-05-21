<?php
include 'dao/functionDAO.php';

$id=$_POST['search'];

$action=new functionDAO();
$action->searchEmployee($id);
?>