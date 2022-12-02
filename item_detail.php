<<<<<<< Updated upstream
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
} else {
    // テスト用
    echo 'ようこそ' . $_SESSION['user_name'] . 'さん<br>';
}
?>

=======
>>>>>>> Stashed changes
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
                <h1 class="text-center"></h1>
            </div>
        </div>

     <div class="row">
        <!-- 商品メイン画像 -->
        <div class="col-md-6 text-center col-12">
            <img src="img/ハロウィン/セット3/セット3_main.jpg"  width=400px alt ="メイン写真">
        </div>
         

        <!-- 商品説明 -->
        <div class="col-md-5 offset-1 text-left">
            <h2 class = "title">商品タイトル</h2>
            <p>[セット内容]<br>  
            カラフルバルーン/ガイコツバルーン/タッセル</p>
            <p>ハロウィンカラーのバルーンに加え、華やかさアップ間違いなしのお部屋に</p>
            
        </div>
     </div>
        <div class="row mt-md-3">
        <div class="col-md-2 offset-8">
            <h2>1000円</h2>
        </div>
        </div>
     
            
        <div class="row gx-2 mt-2">
            <div class="col-md-1">
                
            </div>
            <div class="col-md-10 col-10">
                <img src="img/ハロウィン/セット3/セット3_detail1.jpg" width="200px" alt="詳細写真"><img src="img/ハロウィン/セット3/セット3_detail2.jpg" width="200px" alt="詳細写真"><img src="img/ハロウィン/セット3/セット3_detail1.jpg" width="200px" alt="詳細写真"><img src="img/ハロウィン/セット3/セット3_detail2.jpg" width="200px" alt="詳細写真">
            </div> 
        </div>
        <div class="row mt-4">
            <div class="col-md-2 offset-8">
            <form action ="item_detail.php" method="POST" class ="btn1">
            <p>個数　<input type="text" style="width:50px" value="1"></p>
            
            <input class ="btn btn-danger rounded-pill btn-lg" type="submit" style="width:170px" value="カートに入れる">
            </form>
            </div>
        </div>

        <!-- BGM -->
        <div class ="row mt-4">
        <div class="col-md-11 offset-1">
        <p>BGM</p>  
          <hr width="500"></hr>
        <p>ディズニーハロウィンメドレー<br>
          ハロウィンに聴きたい曲メドレー<br>
          かぼちゃの館　1時間版</p> 
        </div>
        </div>

        <!-- レシピ -->
        <div class ="row">
        <div class="col-md-11 offset-1">
        <p>レシピ</p>  
          <hr width="500"></hr>
        <p>冷凍パイシートで作るウィンナーミイラ<br>
           かわいいお化けのマシュマロクッキー<br>
           ミニハロウィンミートパイ</p>
        </div>
        </div>

           <div class="text-center">
               <button class ="btn btn-outline-danger rounded-pill btn-lg w-25">戻る</button>
           </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>

</html>