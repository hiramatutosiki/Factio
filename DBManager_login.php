<!DOCTYPE html>
<link rel="stylesheet" href="style.css">

<p class="error">

<?php
class DBManager {
	//接続のメソッド
	private function dbConnect(){
		$pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8','webuser','abccsd2');
		return $pdo;
	}
//userをID指定で取得するメソッド
public function insertUserMst($user_mail,$user_pass,$user_id,$user_name,$user_postcode,$user_prefecture,$user_city){
    $pdo = $this->dbConnect();

    $sql = "INSERT INTO user(user_mail,user_pass,user_id,user_name,user_postcode,user_prefecture,user_city)
            VALUES(?,?,?,?)";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1, $user_mail, PDO::PARAM_STR);
    $ps->bindValue(2, password_hash($user_pass,PASSWORD_DEFAULT), PDO::PARAM_STR);
	$ps->bindValue(3, $user_id, PDO::PARAM_STR);
	$ps->bindValue(4, $user_name, PDO::PARAM_STR);
    $ps->bindValue(5, $user_postcode, PDO::PARAM_STR);
	$ps->bindValue(6, $user_prefecture, PDO::PARAM_STR);
	$ps->bindValue(7, $user_city, PDO::PARAM_STR);
    $ps->execute();
    }
	
	    // ユーザーログイン

		public function checkLoginByMailAndPass($user_mail, $user_pass)

		{
			$ret = [];
			$pdo = $this->dbConnect();
			$sql = "SELECT*FROM user WHERE user_mail = ?";
			$ps = $pdo->prepare($sql);
			$ps->bindValue(1, $user_mail, PDO::PARAM_STR);
			$ps->execute();
			$userList = $ps->fetchAll();
			if(!isset($userList)){
					$ret = "mail";
			}
			foreach ($userList as $row) {
				if (password_verify($user_pass, $row['user_pass']) == true) {
					$ret = $userList;
				} else{
					
					
				header('Location:passerror.php');
					
			}
			return $ret;

		}
	}
}
		?>
		

</p>