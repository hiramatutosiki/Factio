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

	// おすすめ表示
	public function getRecommendItem($category)
	{
        $pdo = $this->dbConnect();
		$sql = "SELECT * FROM item WHERE category_name = ?";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(1, $category, PDO::PARAM_STR);
		$ps->execute();

		$searchArray = $ps->fetchAll();
		return $searchArray;
	}

	//
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
}