<?php
session_start();
if (isset($_SESSION['user_id'])) {
} else {
    header('Location: login.php');
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
    <!-- ヘッダー読み込み -->
    <?php
    require_once('header_login.php');
    ?>

    <div class="container-fluid">
        <!-- 見出し：お支払い -->
        <div class="row my-5">
            <div class="col-6 offset-1">
                <h1 class="text-left">お支払い</h1>
            </div>
        </div>

        <!-- 本文 -->
        <?php
        require 'DBManager.php';
        $dbmng = new DBManager();
        for($i=0; $i<count($_POST['cart_id']); $i++){
            $dbmng->editCartItemNum($_POST['item_num'][$i], $_POST['cart_id'][$i]);
        }
         if(!empty($_POST['age'])){
            $dbmng->addCartAge($_POST['age'], $_SESSION['user_id']);
        }
        $searchArray = $dbmng->getUser($_SESSION['user_id']);

        foreach ($searchArray as $row) {

            echo    '<div class="row my-3">
            <div class="col-6 offset-2">
                <p class="text-left">' . $row["user_name"] . '様</p>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-3 offset-3">
                <p>お届け先</p>
            </div>
            <div class="col-3">
                <p>' . $row["user_postcode"] . '</p>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-3 offset-6">
                <p>' . $row["user_prefecture"] . '</p>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-3 offset-6">
                <p>' . $row["user_city"] . '</p>
            </div>
        </div>';
        }


        echo    '<div class="row my-3">
            <div class="col-3 offset-3">
                <p>購入商品</p>
            </div>
        </div>';


        $searchArray = $dbmng->getCart($_SESSION['user_id']);
        $sum = 0;
        foreach ($searchArray as $row) {

            echo '<div class="row my-3">
                    <div class="col-12 text-center">
                        <p>' . $row["item_name"] . '　' . $row["item_price"] . '円×' . $row["item_num"] . '個</p>
                    </div>
        </div>';

            $sum = $sum + ($row["item_price"] * $row["item_num"]);
        }

        ?>

        <!-- 合計 -->
        <?php
        echo    '<div class="row my-3">
            <div class="col-3 offset-9">
                <p>合計' . $sum . '円</p>
            </div>
        </div>';
        ?>

        <!-- ボタン：購入する -->
        <div class="d-grid gap-3 col-2 mx-auto my-5">
           <button class="btn btn-lg rounded-pill" type="submit" style="background-color: #ED6565; color: #FFFFFF" onclick="location.href='cart_finish.php'">購入する</button>
        </div>

        <!-- ボタン：カートへもどる -->
        <div class="d-grid gap-3 col-2 mx-auto my-5">
           <button class="btn btn-lg rounded-pill" type="button" style="background-color: #FFFFFF; border-color: #ED6565; color: #ED6565" onclick="location.href='cart.php'">カートへもどる</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>