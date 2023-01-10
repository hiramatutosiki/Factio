<!--ロリポップ同期済み-->
<?php
session_start();
session_destroy();
header('Location: index.php');
?>