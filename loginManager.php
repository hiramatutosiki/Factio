<?php
//新規登録する処理
$pdo =new PDO('mysql:host=localhost;dbname=webdb;charset=utf8',
												'wbuser','abccsd2');
$sql ="INSERT INTO user_mst(user_mail,user_pass,user_name,user_postcode,user_prefecture,user_city,recode_date,update_date) 
			VALUSE (?,?,?,?,?,?,?,?)";
$ps =$pdo->prepare($sql);
$day =date("Y/m/d");
$ps->bindValue(1,$_POST['mail'],PDO::PARAM_STR);
$ps->bindValue(2,$_POST['pass'],PDO::PARAM_STR);
$ps->bindValue(3,$_POST['name'],PDO::PARAM_STR);
$ps->bindValue(4,$_POST['post'],PDO::PARAM_INT);
$ps->bindValue(5,$_POST['pre'],PDO::PARAM_STR);
$ps->bindValue(6,$_POST['city'],PDO::PARAM_STR);
$ps->bindValue(7,$day,PDO::PARAM_STR);
$ps->bindValue(8,$day,PDO::PARAM_STR);
$ps->execute();
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