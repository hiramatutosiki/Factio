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
    <style>
        .bg-img {
            background-image: url(img/janbo.jpg);
            background-size: cover;
            background-position: center 60%;
	    margin-top:2px;
            padding:22%;
        }
	.body{
	margin-top:20px;
	}	
    </style>
</head>

<body>
    <?php
    require_once(__DIR__ . '/header.php');
    ?>
    <!-- ジャンボトロン -->
	<div class="bg-img">
	  <div class="container">
        </div>
      </div>
    <div class="container-fluid w-75">
        <!-- 見出し：おすすめ -->
        <div class="row my-5">
            <div class="col-9 offset-0">
                <h1 class="text-left text-weight-bold">TOPICS</h1>
                <p class="text-left h5">スタッフのおすすめ</p>
            </div>
        </div>

        <!-- 商品一覧 -->
        <div class="row row-cols-2 row-cols-sm-2 row-cols-lg-4 g-3 mx-auto">
            <?php
            require_once 'DBManager.php';
            $dbmng = new DBManager();
            $dbmng->getItemByCategory('クリスマス');
            $dbmng->getItemByCategory('年末年始');
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>