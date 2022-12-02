<?php
session_start();
if (isset($_SESSION['user_id'])) {
    // テスト用
    echo 'ようこそ' . $_SESSION['user_name'] . 'さん<br>';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Factio</title>
</head>

<body>
    <?php
    require_once(__DIR__ . '/header.php');
    ?>

    <div class="container-fluid">
        <!-- 見出し： -->
        <div class="row my-5">
            <div class="col-6 offset-3">
                <h1 class="text-center">見出し</h1>
            </div>
        </div>

        <?php
        require_once 'DBManager.php';
        $dbmng = new DBManager();
        $result = $dbmng->getItemDetail($_POST['id']);
        foreach ($result as $row) {
            echo "$row[item_name]<br>";
            echo "$row[item_content]<br>";
            echo "$row[item_explain]<br>";
            echo "$row[item_price]円<br>";
            echo "$row[item_mainimage]<br>";
            echo "$row[item_detailimage1]<br>";
            echo "$row[item_detailimage2]<br>";
            echo "$row[item_detailimage3]<br>";
            echo "$row[item_detailimage4]<br>";
        }
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>