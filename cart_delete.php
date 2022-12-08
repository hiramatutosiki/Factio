<?php
session_start();
require 'DBManager.php';
$dbmng = new DBManager();
$dbmng->deleteCartItem($_POST['delete']);
header('Location: cart.php');
?>
