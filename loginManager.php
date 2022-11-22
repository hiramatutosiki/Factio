<?php
class loginManager {
	//接続のメソッド
	private function dbConnect(){
		$pdo = new PDO('mysql:host=localhost;dbname=factio;charset=utf8',
							'webuser', 'abccsd2');
		return $pdo;
	}

	//user_tblをID指定で取得するメソッド
	public function errcheck($getid){
		$pdo = $this->dbConnect();

		$sql = "SELECT * FROM user WHERE user_mail = ? AND user_pass=?";

		$ps = $pdo->prepare($sql);
		$ps->bindValue(1, $_POST['mail'], PDO::PARAM_STR);
        $ps->bindValue(2,$_POST['pass'],PDO::PARAM_STR);
		$ps->execute();
		$searchArray = $ps->fetchAll();
        foreach($searchArray as $row){
            $_SESSION['mail'] = $row['mail'];
            $SESSION['pass'] = $row['pass'];
        }
		return $searchArray;
	}
}
    ?>