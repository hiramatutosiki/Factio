<?php

session_start();

require_once(__DIR__ . '/DBManager.php');

$dbmng = new DBManager();
        $result = $dbmng->InsertCart($_POST['item_id'], $_SESSION['user_id'], $_POST['item_num']);

    header('Location:index.php');
 ?>