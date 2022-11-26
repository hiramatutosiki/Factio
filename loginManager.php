<?php
$mail =$_POST['mail'];
$pass =$_POST['pass'];
$name =$_POST['name'];
$post =$_POST['post'];
$pro =$_POST['pro'];
$city =$_POST['city'];
$day =date("Y/m/d");
//新規登録する処理
class Mesod{
	private function dbsetu(){
		$pdo =new PDO('mysql:host=localhost;dbname=webdb;charset=utf8',
												'wbuser','abccsd2');
		return $pdo;
	}
public function getuserID($mail,$pass,$name,$post,$pro,$city,$day){

$sql ="INSERT INTO user(user_mail,user_pass,user_name,user_postcode,user_prefecture,user_city,recode_date) VALUES (?,?,?,?,?,?,?)";
$ps =$pdo->prepare($sql);
$ps->bindValue(1,$mail,PDO::PARAM_STR);
$ps->bindValue(2,password_hash($pass,PASSWORD_DEFAULT),PDO::PARAM_STR);
$ps->bindValue(3,$name,PDO::PARAM_STR);
$ps->bindValue(4,$post,PDO::PARAM_INT);
$ps->bindValue(5,$pro,PDO::PARAM_STR);
$ps->bindValue(6,$city,PDO::PARAM_STR);
$ps->bindValue(7,$day,PDO::PARAM_STR);
$ps->execute();
	}
}
?>
//もうすでに登録されてないかの確認処理
<?php
$mail =$_POST['mail'];
$pass =$_POST['pass'];
$pdo =new PDO('mysql:host=localhost;dbname=webdb;charset=utf8',
'wbuser','abccsd2');
$sql ="SELECT * FROM user WHERE user_mail =:mail AND user_pass =:pass";
$ps =$pdo->prepare($sql);
$ps->bindValue(':mail',$mail);
$ps