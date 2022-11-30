<?php
class DBManager
{
	// 接続メソッド
	private function dbConnect()
	{
		$pdo = new PDO(
			'mysql:host=localhost;dbname=webdb;charset=utf8',
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
	public function newUser($mail,$pass,$name,$post,$pro,$city){
		$pdo =$this->dbConnect();
		$sql ="INSERT INTO user(user_mail,user_pass,user_name,user_postcode,user_prefecture,user_city,record_date) VALUES (?,?,?,?,?,?,?)";
		$ps =$pdo->prepare($sql);
		$day =date("Y/m/d");
		$ps->bindValue(1,$mail,PDO::PARAM_STR);
		$ps->bindValue(2,password_hash($pass,PASSWORD_DEFAULT),PDO::PARAM_STR);
		$ps->bindValue(3,$name,PDO::PARAM_STR);
		$ps->bindValue(4,$post,PDO::PARAM_STR);
		$ps->bindValue(5,$pro,PDO::PARAM_STR);
		$ps->bindValue(6,$city,PDO::PARAM_STR);
		$ps->bindValue(7,$day,PDO::PARAM_STR);
		$ps->execute();
	}

}
