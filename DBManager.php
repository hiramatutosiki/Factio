<?php
class DBManager
{
	// 接続メソッド
	private function dbConnect()
	{
		$pdo = new PDO(
			'mysql:host=localhost;dbname=factio;charset=utf8',
			'webuser',
			'abccsd2'
		);
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

	// ユーザー登録（テスト用）
	public function insertUserMst()
	{
		$pdo = $this->dbConnect();
		$sql = "INSERT INTO user(user_mail,user_name,user_pass)
            VALUES(?,?,?)";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1, "test@test.com", PDO::PARAM_STR);
		$ps->bindValue(2, "test", PDO::PARAM_STR);
		$ps->bindValue(3, password_hash("testtest", PASSWORD_DEFAULT), PDO::PARAM_STR);
		$ps->execute();
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
		$ps->bindValue(1,$id,PDO::PARAM_STR);
		$ps->execute();

		$searchArray = $ps->fetchAll();
		return $searchArray;
	}

	// カート内表示
	public function getCart($id)
	{
		$pdo = $this->dbConnect();
		$sql = "SELECT * FROM cart INNER JOIN item ON cart.item_id = item.item_id WHERE cart.user_id=?";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1,$id,PDO::PARAM_STR);
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
		$ps->bindValue(1,$id,PDO::PARAM_STR);
		$ps->execute();
	}
}
