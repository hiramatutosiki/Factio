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
                <h1 class="text-center"></h1>
            </div>
        </div>

        <!-- 商品メイン画像 -->
        <figure class="image">
         <img src="set3/set3.jpg" alt ="写真">
         
          <!-- 商品説明 -->
         <div class ="shohintitle">
            <h2 class = "title">商品タイトル　1,000円</h2>
            <p class ="shohin">セット内容</p>  
            <p class ="set">・グッズA</p>
            <p class ="set">・グッズB</p>
            <p class ="set">・グッズC</p>
            <p class ="text">年齢　<input type="text" class="number"> 歳</p> 
        </div> 
            
        </figure>
        <div class="row">
            <div class="col-md-2 col-6 alert-success p-3">
             <img src="set3/gaikotu.jpg" class="img-fluid">
             </div>
             <div class="col-md-2 col6 alert-success p-3">
                <img src="set3/karahuru.jpg" class="img-fluid">
             </div>  
             </div>
             <p class ="text2">個数　<input type="text" class="number"></p>
             <div class ="btn1">
             <button class ="btn btn-danger btn-lg w-100">カートに入れる</button>
             </div>
        <!-- BGM -->
        <div class ="BGM">
        <p>BGM</p>
            </div>
            <hr width="500"></hr>
            <div class ="naiyou">
        <p>ディズニーハロウィンメドレー<br>
           ハロウィンに聴きたい曲メドレー<br>
           かぼちゃの館　1時間版</p>
           </div>
        <!-- レシピ -->
        <div class ="resipi">
            <p>レシピ</p>
            </div>
            <hr width="500"></hr>
            <div class="naiyou">
        <p>冷凍パイシートで作るウィンナーミイラ<br>
           かわいいお化けのマシュマロクッキー<br>
           ミニハロウィンミートパイ</p>
           </div>
           <div class ="btn2">
           <button class ="btn btn-outline-danger btn-lg w-25">戻る</button>
           </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>

</html>