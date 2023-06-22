<?php
session_start();
$_SESSION['pdata'][] = $_POST['pdata'];
print_r($_SESSION);
?>