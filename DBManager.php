<?php
class DBManager
{
	// 接続メソッド
	private function dbConnect()
	{
		$pdo = new PDO('mysql:host=mysql207.phy.lolipop.lan;dbname=LAA1418466-kaihatuensyu;charset=utf8','LAA1418466','oboeyasui');
		return $pdo;
	}

	// 商品一覧（カテゴリー指定）表示
	public function getItemByCategory($category)
	{
		$pdo = $this->dbConnect();
		$sql = "SELECT * FROM item WHERE category_name = ?";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1, $category, PDO::PARAM_STR);
		$ps->execute();

		$searchArray = $ps->fetchAll();
		if (isset($_POST['category'])) {
			$count = count($searchArray);
			echo "<div class=\"row my-5\">
					<div class=\"col-9 offset-0\">
						<h2 class=\"text-left\">カテゴリ $_POST[category]</h2>
					</div>
				 </div>";
			echo "<h3>ヒット件数:{$count}件</h1>
				  <div class=\"row row-cols-2 row-cols-sm-2 row-cols-lg-4 g-3 mx-auto\">";
		}

		foreach ($searchArray as $row) {
			echo "<div class=\"col my-4\">
						<form action=\"item_detail.php\" method=\"post\">
						<button type=\"submit\" class=\"btn btn-link\" name=\"id\" value=\"$row[item_id]\" style=\"text-decoration: none; color: black\">
						<div class=\"card border border-0\">
							<img src=\"img/$row[item_mainimage]\" class=\"card-img-top img-fluid\" alt=\"$row[item_name]\">
							<div class=\"card-body\" >
								<h3 class=\"card-title text-center\">$row[item_name]</h3>
								<p class=\"card-text text-center h6\">$row[item_price]円</p>
							</div>
						</div>
						</form>
					</div>";
		}
	}

	// 商品詳細表示
	public function getItemDetail($id)
	{
		$pdo = $this->dbConnect();
		$sql = "SELECT * FROM item WHERE item_id = ?";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1, $id, PDO::PARAM_STR);
		$ps->execute();

		$searchArray = $ps->fetchAll();
		return $searchArray;
	}
	// ユーザーログイン
	public function checkLoginByMailAndPass($user_mail, $user_password)
	{
		$ret = [];
		$pdo = $this->dbConnect();
		$sql = "SELECT*FROM user WHERE user_mail = ?";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1, $user_mail, PDO::PARAM_STR);
		$ps->execute();
		$userList = $ps->fetchAll();
		foreach ($userList as $row) {
			if (password_verify($user_password, $row['user_pass']) == true) {
				$ret = $userList;
			}
		}
		return $ret;
	}

	// ユーザー情報表示
	public function getUser($id)
	{
		$pdo = $this->dbConnect();
		$sql = "SELECT * FROM user WHERE user_id= ?";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1, $id, PDO::PARAM_STR);
		$ps->execute();

		$searchArray = $ps->fetchAll();
		return $searchArray;
	}

	// カート追加
	public function insertCart($item_id, $user_id, $item_num)
	{
		$pdo = $this->dbConnect();
		$sql = "INSERT INTO cart(item_id,user_id,item_num,add_date)
			VALUES(?,?,?,CURDATE())";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1, $item_id, PDO::PARAM_INT);
		$ps->bindValue(2, $user_id, PDO::PARAM_INT);
		$ps->bindValue(3, $item_num, PDO::PARAM_INT);
		$ps->execute();
	}

	// カート内表示
	public function getCart($id)
	{
		$pdo = $this->dbConnect();
		$sql = "SELECT * FROM cart INNER JOIN item ON cart.item_id = item.item_id WHERE cart.user_id=? AND cart.buy_date IS NULL";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1, $id, PDO::PARAM_STR);
		$ps->execute();

		$searchArray = $ps->fetchAll();
		return $searchArray;
	}

	// カート内アイテム削除
	public function deleteCartItem($id){
		$pdo = $this->dbConnect();
		$sql = "DELETE FROM cart WHERE cart_id=?;";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1, $id, PDO::PARAM_STR);
		$ps->execute();

		$searchArray = $ps->fetchAll();
		return $searchArray;
	}

	// 年齢
	public function addCartAge($age, $id)
	{
		$pdo = $this->dbConnect();
		$sql = "UPDATE cart SET main_age = ? WHERE user_id = ? AND buy_date IS NULL";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1, $age, PDO::PARAM_STR);
		$ps->bindValue(2, $id, PDO::PARAM_STR);
		$ps->execute();

		$searchArray = $ps->fetchAll();
		return $searchArray;
	}

	// 決済日追加
	public function updateCart($id)
	{
		$pdo = $this->dbConnect();
		$sql = "UPDATE cart SET buy_date = CURDATE() WHERE user_id = ? AND buy_date IS NULL";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1, $id, PDO::PARAM_STR);
		$ps->execute();
	}

	// 新規登録
	public function newUser($mail, $pass, $name, $post, $pro, $city)
	{
		$pdo = $this->dbConnect();
		$sql = "INSERT INTO user(user_mail,user_pass,user_name,user_postcode,user_prefecture,user_city,record_date) VALUES (?,?,?,?,?,?,?)";
		$ps = $pdo->prepare($sql);
		$day = date("Y/m/d");
		$ps->bindValue(1, $mail, PDO::PARAM_STR);
		$ps->bindValue(2, password_hash($pass, PASSWORD_DEFAULT), PDO::PARAM_STR);
		$ps->bindValue(3, $name, PDO::PARAM_STR);
		$ps->bindValue(4, $post, PDO::PARAM_STR);
		$ps->bindValue(5, $pro, PDO::PARAM_STR);
		$ps->bindValue(6, $city, PDO::PARAM_STR);
		$ps->bindValue(7, $day, PDO::PARAM_STR);

		$ps->execute();
	}
	// カテゴリ：誕生日の商品がカートにあるかチェック
    public function cartCheckBirthdayItem($array)
    {
        $exist = false;
        foreach ($array as $row) {
            if ($row['category_name'] == "誕生日") {
                $exist = true;
                return $exist;
            }
        }
    }
	
	//カート内アイテム個数変更
	  public function editCartItemNum($num, $id){
        $pdo = $this->dbConnect();
        $sql = "UPDATE cart SET item_num = ? WHERE cart_id = ?";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(1, $num, PDO::PARAM_STR);
        $ps->bindValue(2, $id, PDO::PARAM_STR);
        $ps->execute();
        $searchArray = $ps->fetchAll();
        return $searchArray;
    }
}
