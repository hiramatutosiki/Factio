<?php

//新規登録する処理
class Mesod{
	$mail =$_POST['mail'];
	$pass =$_POST['pass'];
	$name =$_POST['name'];
	$post =$_POST['post'];
	$pro =$_POST['pro'];
	$city =$_POST['city'];
	$day =date("Y/m/d");
	private function dbsetu(){
		$pdo =new PDO('mysql:host=localhost;dbname=webdb;charset=utf8',
												'wbuser','abccsd2');
		return $pdo;
	}
	public function getuserID($maill,$passw,$nama,$poste,$proe,$cityt,$day){

		$sql ="INSERT INTO user(user_mail,user_pass,user_name,user_postcode,user_prefecture,user_city,recode_date) VALUES (?,?,?,?,?,?,?)";
		$ps =$pdo->prepare($sql);
		$ps->bindValue(1,$maill,PDO::PARAM_STR);
		$ps->bindValue(2,password_hash($passw,PASSWORD_DEFAULT),PDO::PARAM_STR);
		$ps->bindValue(3,$nama,PDO::PARAM_STR);
		$ps->bindValue(4,$poste,PDO::PARAM_INT);
		$ps->bindValue(5,$proe,PDO::PARAM_STR);
		$ps->bindValue(6,$cityt,PDO::PARAM_STR);
		$ps->bindValue(7,$day,PDO::PARAM_STR);
		$ps->execute();
	}
	public function length($pass){
		$str =mb_strlen($pass);
		if($str<8){
			echo "パスワードは８文字以上入力してください";
		}
	}
}
?>
<?php
     $pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8',
     'webuser','abccsd2');
     if (!empty($_POST)) {
        /* 入力情報の不備を検知 */
        if ($_POST['mail'] === "") {
            $error['mail'] = "blank";
        }          
        /* メールアドレスの重複を検知 */
        if (!isset($error)) {
            $member = $db->prepare('SELECT COUNT(*) as cnt FROM user WHERE user_mail=?');
            $member->execute(array(
                $_POST['mail']
            ));
            $record = $member->fetch();
            if ($record['cnt'] > 0) {
                $error['mail'] = 'duplicate';
            }
        }
     
    }
	?>