<?php

//新規登録する処理
class Mesod{
	private function dbsetu(){
		$pdo =new PDO('mysql:host=localhost;dbname=webdb;charset=utf8',
												'webuser','abccsd2');
		return $pdo;
	}
		public function getuserID($mail,$pass,$name,$post,$pro,$city){
		$pdo =$this->dbsetu();
		$sql ="INSERT INTO user(user_mail,user_pass,user_name,user_postcode,user_prefecture,user_city) VALUES (?,?,?,?,?,?)";
		$ps =$pdo->prepare($sql);
		$ps->bindValue(1,$mail,PDO::PARAM_STR);
		$ps->bindValue(2,password_hash($pass,PASSWORD_DEFAULT),PDO::PARAM_STR);
		$ps->bindValue(3,$name,PDO::PARAM_STR);
		$ps->bindValue(4,$post,PDO::PARAM_INT);
		$ps->bindValue(5,$pro,PDO::PARAM_STR);
		$ps->bindValue(6,$city,PDO::PARAM_STR);
		$ps->execute();
	}
}
?>
<?php
class mesod{
private function db(){
	$pdo =new PDO('mysql:host=localhost;dbname=webdb;charset=utf8',
          'webuser','abccsd2');
		  return $pdo;
}

public function count($mail){
		$pdo =$this->db();
          $sql ="SELECT * FROM user WHERE user_mail =?";
          $ps =$pdo->prepare($sql);
          $ps->bindValue(1,"%".$_POST['mail']."%",PDO::PARAM_STR);
          $ps->execute();
          $searc =$ps->fetchAll()
          foreach($searc as $row ){
			$SESSION['mail'] =$row['user_mail'];
		  }
		  return $searc;
		}
	}
?>
