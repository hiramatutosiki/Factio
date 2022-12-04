<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<p class="error">
<?php

session_start();

require_once(__DIR__ . '/DBManager.php');

$dbmng = new DBManager();
$userData = $dbmng->checkLoginByMailAndPass($_POST['user_mail'], $_POST['user_pass']);
if (is_array($userData)) {
foreach ($userData as $row) {
$_SESSION['user_id'] = $row['user_id'];
$_SESSION['user_name'] = $row['user_name'];
$_SESSION['user_postcode'] = $row['user_postcode'];
$_SESSION['user_prefecture'] = $row['user_prefecture'];
$_SESSION['user_city'] = $row['user_city'];
header('Location:index.php');
}
} else {

    header('Location:mailerror.php');
echo $userData;
}

?>
</p>
<br><button class="btn btn-lg text-nowrap" type="button" style="background-color: #FFFFFF; border-color: #ED6565; color: #ED6565" onclick="location.href='login.php'">戻る</button>

