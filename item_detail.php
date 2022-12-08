<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
} else {
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
                <h1 class="text-center"></h1>
            </div>
        </div>

<?php
        require_once 'DBManager.php';
        $dbmng = new DBManager();
        $result = $dbmng->getItemDetail($_POST['id']);
        foreach ($result as $row) {
echo    '<div class="row">
        <!-- 商品メイン画像 -->
        <div class="col-md-6 text-center col-12">
            <img src="img' .$row["item_mainimage"]. '" width="400px" alt ="メイン写真">
        </div>
         

        <!-- 商品説明 -->
        <div class="col-md-4 offset-1 text-left col-8">
            <h2 class = "title">' .$row["item_name"]. '</h2>
            <p>セット内容<br>
            [' .$row["item_content"]. ']</p>
            <p>' .$row["item_explain"]. '</p>
            
        </div>
     </div>
        <div class="row mt-md-3">
        <div class="col-md-2 offset-8">
            <h2>' .$row["item_price"]. '円</h2>
        </div>
        </div>
     
            
        <div class="row gx-2 mt-2">
            <div class="col-md-1">
                
            </div>
            <div class="col-md-10 col-10 offset-md-2">';
                if(isset($row["item_detailimage1"])){
                    echo '<img src="img' .$row["item_detailimage1"]. '" width="200px" alt="詳細写真">';
                }
                if(isset($row["item_detailimage2"])){
                    echo '<img src="img' .$row["item_detailimage2"]. '" width="200px" alt="詳細写真">';
                }
                if(isset($row["item_detailimage3"])){
                    echo '<img src="img' .$row["item_detailimage3"]. '" width="200px" alt="詳細写真">';
                }
                if(isset($row["item_detailimage4"])){
                    echo '<img src="img' .$row["item_detailimage4"]. '"width="200px" alt="詳細写真">';
                }
echo        '</div> 
        </div>';

echo    '<div class="row mt-4">
            <div class="col-md-2 offset-8">
            <form action ="item_insert.php" method="POST" class ="btn1">
            <input type="hidden" name="item_id" value="' .$_POST['id']. '">
            <p>個数　<input type="text" style="width:50px" value="1" name="item_num"></p>
            <input class ="btn btn-danger rounded-pill btn-lg" type="submit" style="width:170px" value="カートに入れる">
            </form>
            </div>
        </div>';
        

if($row["category_name"]!="小物"){
echo    '<!-- BGM -->
        <div class ="row mt-4">
        <div class="col-md-11 offset-1">
        <p>BGM</p>  
          <hr width="500"></hr>
        <p><a href="' .$row["bgm_url1"]. '" target="_blank" rel="noopener noreferrer">' .$row["bgm_title1"]. '<a><br>
            <a href="' .$row["bgm_url2"]. '" target="_blank" rel="noopener noreferrer">' .$row["bgm_title2"]. '<a><br>
            <a href="' .$row["bgm_url3"]. '" target="_blank" rel="noopener noreferrer">' .$row["bgm_title3"]. '<a></p>
        </div>
        </div>

        <!-- レシピ -->
        <div class ="row">
        <div class="col-md-11 offset-1">
        <p>レシピ</p>  
          <hr width="500"></hr>
        <p><a href="' .$row["recipe_url1"]. '" target="_blank" rel="noopener noreferrer">' .$row["recipe_title1"]. '<a><br>
          <a href="' .$row["recipe_url2"]. '" target="_blank" rel="noopener noreferrer">' .$row["recipe_title2"]. '<a><br>
          <a href="' .$row["recipe_url3"]. '" target="_blank" rel="noopener noreferrer">' .$row["recipe_title3"]. '<a></p>
        </div>
        </div>';
}

echo       '<div class="text-center mt-4 mb-4">
              <input class ="btn btn-outline-danger rounded-pill btn-lg w-25" value="戻る" onclick="history.back();" type="button">
           </div>
           ';
           }
?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>