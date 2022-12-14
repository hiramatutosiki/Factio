<?php
session_start();
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
        <!-- 見出し：ログイン -->
        <div class="row my-5">
            <div class="col-6 offset-3">
                <h1 class="text-center">ログイン</h1>
            </div>
        </div>

        <!-- フォーム -->
        <form action="login_check.php" method="post">
            <!-- フォーム：メールアドレス -->
            <div class="row my-3">
                <div class="col-6 offset-3">
                    <label for="input_mail" class="form-label">メールアドレス</label>
                    <input type="text" class="form-control" name="user_mail" placeholder="name@example.com">
                </div>
            </div>

            <!-- フォーム：パスワード -->
            <div class="row my-3">
                <div class="col-6 offset-3">
                    <label for="input_password" class="form-label">パスワード</label>
                    <input type="password" class="form-control" name="user_password">
                </div>
            </div>

            <!-- ボタン：ログイン -->
            <div class="d-grid gap-3 col-2 mx-auto my-5">
                <button class="btn btn-lg text-nowrap" type="submit" style="background-color: #ED6565; color: #FFFFFF">ログイン</button>
            </div>
        </form>

        <!-- リンク：新規登録 -->
        <div class="row my-3 text-center">
            <div class="col-6 offset-3">
                <a href="registration.php">新規登録はこちら</a>
            </div>
        </div>

        <!-- ボタン：Top -->
        <div class="d-grid gap-3 col-2 mx-auto my-5">
            <button class="btn btn-lg rounded-pill" type="button" style="background-color: #FFFFFF; border-color: #ED6565; color: #ED6565" onclick="location.href='index.php'">Top</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>