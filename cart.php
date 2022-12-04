<?php
session_start();
if (isset($_SESSION['user_id'])) {
    // テスト用
    echo 'ようこそ' . $_SESSION['user_name'] . 'さん<br>';
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
    require_once('header.php');
    ?>

    <div class="container-fluid w-75">
        <!-- 見出し：カート -->
        <div class="row my-5">
            <div class="col-6 offset-1">
                <h1 class="text-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16" style="color: #ED6565">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg>
                    カート
                </h1>
            </div>
        </div>

        <!-- 本文 -->
        <?php
        require 'DBManager.php';
        $dbmng = new DBManager();
        ?>

        <div class="row my-3">
            <?php
            $searchArray = $dbmng->getCart($_SESSION['user_id']);
            $i = 0;
            $sum = 0;
            foreach ($searchArray as $row) {

                echo '<div class="col-md-2 col-10 offset-md-1 offset-1">
                        <img src="img' . $row["item_mainimage"] . '" class="img-fluid img-thumbnail" alt="sample">
                    </div>
                    <div class="col-md-3 col-10 offset-1">
                        <h2 style="padding-bottom: 10px">' . $row["item_name"] . '</h2>
                        <p class="text-end">' . $row["item_price"] . '円</p>
                    </div>';

                $sum = $sum + ($row["item_price"] * $row["item_num"]);

                echo ' <div class="col-md-2 col-10 offset-1">
                        <p style="display: inline-block; padding: 10px;">個数</p>
                        <input type="number" name="num" value="' . $row["item_num"] . '" style="display: inline-block; width: 3em">
                     </div>

                     <div class="col-md-2 col-10">
                     <form action="cart_delete.php" method="post">
                        <input type="hidden" name="delete" value="' . $row["cart_id"] . '">
                        <button type="submit value="" style="border: none; background-color: #FFFFFF">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                        </button>
                        </form>
                    </div>';
            }
            if ($sum == 0) {
                echo "カート内にアイテムが存在しません";
                exit;
            }
            ?>
        </div>

        <!-- 年齢 -->
        <form action="cart_check.php" method="post">
            <div class="row my-3">
                <div class="col-8 offset-2 text-end">
                    <p style="font-size: 1.3em">お祝いする方の年齢をご入力ください</p>
                    <p>※年齢の数字のバルーンをお送りいたします。</p>
                    <p style="font-size: 1.3em">
                        <input type="number" name="age" value="10" style="display: inline-block; width: 3em; margin-right: 5px">歳
                    </p>
                </div>
            </div>

            <!-- 合計 -->
            <?php
            echo '<div class="row my-3">
                   <div class="col-3 offset-9">
                    <p>合計' . $sum . '円</p>
                   </div>
                  </div>';
            ?>

            <!-- ボタン：お支払いへ -->
            <div class="d-grid gap-3 d-md-flex col-md-4 offset-md-6 justify-content-md-end">
                <button class="btn btn-lg rounded-pill" type="submit" style="background-color: #ED6565; color: #FFFFFF" onclick="location.href='cart_check.php'">お支払いへ</button>
            </div>
        </form>

        <!-- ボタン：Top -->
        <div class="d-grid gap-3 col-md-2 col-6 mx-auto my-5">
            <button class="btn btn-lg rounded-pill" type="button" style="background-color: #FFFFFF; border-color: #ED6565; color: #ED6565" onclick="location.href='index.php'">Top</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>