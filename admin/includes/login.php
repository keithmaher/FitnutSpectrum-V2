<?php include "../../includes/database.php"; ?>
<?php session_start(); ?>
<?php


if(isset($_POST["login"])){
	$username = $_POST["user"];
	$password = $_POST["pass"];

 $login = $connection->prepare("SELECT * FROM admin WHERE username = :username AND password = :password ");
 if ($login->execute([
 	'username' => $username,
 	'password' => $password,
]))
	$row = $login->fetchAll(PDO::FETCH_OBJ);
	foreach($row as $login){
		$db_username = $login->username;
		$db_password = $login->password;
		$db_name = $login->admin_name;
	}
 if($username === $db_username  && $password === $db_password ){
 		 $_SESSION['username'] = $db_username;
 		 $_SESSION['password'] = $db_password;
 		 $_SESSION['admin_name'] = $db_name;
 		 $_SESSION['role'] = $db_role;
 		 $_SESSION['product_id'] = $db_pid;
 		 $_SESSION['complete'] = $db_complete;

  header("Location: ../admin.php");
 }else{
 		 header("Location: ../../index.php");
 }
}

?>
