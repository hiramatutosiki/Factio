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

    <div class="container-fluid w-75">
        <!-- 見出し -->
        <div class="row my-5">
            <div class="col-6 offset-3">
                <h1 class="text-center">Category</h1>
            </div>
        </div>

        <!-- 商品一覧 -->
        <div class="row row-cols-2 row-cols-sm-2 row-cols-lg-4 g-3 mx-auto">

    <div class="col" style="">
        <div class="card ">
            <img src="img/サンプル.jpg" class="card-img-top img-fluid" alt="">
            <div class="card-body" >
                <h3 class="card-title text-center">商品タイトル</h3>
                <p class="card-text text-center h6">1,000円</p>
            </div>
         </div>
    </div>

    <div class="col" style="">
        <div class="card ">
            <img src="img/サンプルセット1.png" class="card-img-top img-fluid " alt="">
            <div class="card-body">
                <h3 class="card-title text-center">商品タイトル</h3>
                <p class="card-text text-center h6">1,000円</p>
            </div>
        </div>
    </div>

    <div class="col" style="">
        <div class="card ">
        <img src="img/サンプルセット2.jpg" class="card-img-top img-fluid" alt="">
            <div class="card-body">
             <h3 class="card-title text-center">商品タイトル</h3>
             <p class="card-text text-center h6">1,000円</p>
            </div>
        </div>
    </div>

    <div class="col" style="">
        <div class="card ">
        <img src="img/サンプルセット3.png" class="card-img-top img-fluid  " alt="">
            <div class="card-body">
                <h3 class="card-title text-center">商品タイトル</h3>
                <p class="card-text text-center h6">1,000円</p>
         </div>
        </div>
    </div>

    <div class="col" style="">
        <div class="card ">
        <img src="img/サンプルセット4.png" class="card-img-top img-fluid  " alt="">
            <div class="card-body">
                <h3 class="card-title text-center">商品タイトル</h3>
                <p class="card-text text-center h6">1,000円</p>
            </div>
        </div>
    </div>

     </div>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>