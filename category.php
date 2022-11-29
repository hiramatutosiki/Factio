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
        <?php
        require_once 'DBManager.php';
        $dbmng = new DBManager();
        $result = $dbmng->getRecommendItem($_POST['category']);
        $count = count($result);
        echo "<div class=\"row my-5\">
                <div class=\"col-9 offset-0\">
                    <h2 class=\"text-left\">カテゴリ $_POST[category]</h2>
                </div>
             </div>";
        echo "<h3>ヒット件数:{$count}件</h1>
              <div class=\"row row-cols-2 row-cols-sm-2 row-cols-lg-4 g-3 mx-auto\">";

        foreach ($result as $row) {
            echo "<div class=\"col\">
                    <form action=\"item_detail.php\" method=\"post\">
                    <button type=\"submit\" class=\"btn btn-link\" name=\"id\" value=\"$row[item_id]\" style=\"text-decoration: none; color: black\">
                        <div class=\"card\">
                            <img src=\"img/$row[item_mainimage]\" class=\"card-img-top img-fluid\" alt=\"$row[item_name]\">
                            <div class=\"card-body\" >
                                <h3 class=\"card-title text-center\">$row[item_name]</h3>
                                <p class=\"card-text text-center h6\">$row[item_price]円</p>
                            </div>
                        </div>
                    </form>
                </div>";
        }
        ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>