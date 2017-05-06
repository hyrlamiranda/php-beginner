<?php 

$deleteid = $_GET['id'];


try {
	$user = 'root';
	$pass = 'localenv';
	$dbh = new PDO('mysql:host=localhost;dbname=hyrlatest', $user, $pass, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

	$sql = "DELETE FROM users WHERE id =:id";
	$stmt = $dbh->prepare($sql);
	$stmt->execute([':id' => $deleteid]);

	header("Location: list.php");

} catch(Exception $e) {
	echo "Erro: " . $e->getMessage();
}



