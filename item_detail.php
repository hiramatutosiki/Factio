<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css"/>
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

        <!-- 商品メイン画像 -->
            <img src ="set3/set3.jpg">
        <!-- 商品説明 -->
        <div class ="shohintitle">
        <h2>商品タイトル　1,000円</h2>
        </div>
        <div class = "shohin">
        <p>セット内容</p>  
        <p>・グッズA</p>
        <p>・グッズB</p>
        <p>・グッズC</p>  
        </div>    
        <!-- BGM -->
        <p>BGM</p>

        <p>ディズニーハロウィンメドレー<br>
           ハロウィンに聴きたい曲メドレー<br>
           かぼちゃの館　1時間版</p>
        <!-- レシピ -->
        <p>レシピ</p>
        <p>冷凍パイシートで作るウィンナーミイラ<br>
           かわいいお化けのマシュマロクッキー<br>
           ミニハロウィンミートパイ</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>

</html>