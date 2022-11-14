<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Factio</title>
    <style>
        .bg-img{
            background-image:url(img/rei.jpg);
            background-size:cover;
            background-position:center 60%;
        }
    </style>
</head>

<body>
    <?php
    require_once(__DIR__ . '/header.php');
    ?>
    <!-- ジャンボトロン -->
    <div class ="bg-img p-5">
        <div class="container">
            <img src="img/rei.jpg"class="img-fluid">
        </div>      
    </div>

    <div class="container-fluid">
        <!-- 見出し：おすすめ -->
        <div class="row my-5">
            <div class="col-6 offset-3">
                <h1 class="text-center h1">TOPICS</h1>
                <p class="text-center">＼＼スタッフのおすすめ／／</p>
            </div>
        </div>

        <!-- 商品一覧 -->
        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-4 mx-auto">

            <div class="col" style="max-width: 300px;">
                <div class="card h-100">
                    <img src="img/janbotoron.jpg" class="card-img-top" alt="">
                    <div class="card-body" >
                        <h3 class="card-title text-center">商品タイトル</h3>
                        <p class="card-text text-center">1,000円</p>
                    </div>
                </div>
            </div>

            <div class="col" style="max-width: 300px;">
                <div class="card h-100">
                    <img src="img/janbotoron.jpg" class="card-img-top " alt="">
                    <div class="card-body">
                        <h3 class="card-title text-center">商品タイトル</h3>
                        <p class="card-text text-center">1,000円</p>
                    </div>
                </div>
            </div>

            <div class="col" style="max-width: 300px;">
                <div class="card h-100">
                    <img src="img/janbotoron.jpg" class="card-img-top " alt="">
                    <div class="card-body">
                        <h3 class="card-title text-center">商品タイトル</h3>
                        <p class="card-text text-center">1,000円</p>
                    </div>
                </div>
            </div>

            <div class="col" style="max-width: 300px;">
                <div class="card h-100">
                    <img src="img/janbotoron.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h3 class="card-title text-center">商品タイトル</h3>
                        <p class="card-text text-center">1,000円</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>