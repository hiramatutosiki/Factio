<?php

session_start();

require_once(__DIR__ . '/DBManager.php');

$dbmng = new DBManager();
$userData = $dbmng->checkLoginByMailAndPass($_POST['user_mail'], $_POST['user_password']);
foreach ($userData as $row) {
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['user_name'] = $row['user_name'];
    $_SESSION['user_postcode'] = $row['user_postcode'];
    $_SESSION['user_prefecture'] = $row['user_prefecture'];
    $_SESSION['user_city'] = $row['user_city'];
    header('Location:index.php');
}
if (count($userData) == 0) {
    header('Location:mailerror.php');

}

