<?php
$user = 'root';
$pass = 'localenv';
$dbh = new PDO('mysql:host=localhost;dbname=hyrlatest', $user, $pass, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


$name = $_POST['name'];
$lastname = $_POST['last'];
$phone = $_POST['phone'];
$county = $_POST['county'];
$email = $_POST['email'];
$msg = $_POST['msg'];

try {
	$stmt = $dbh->prepare("INSERT INTO users (name, lastname, phone, county, email, msg) VALUES (:name, :lastname, :phone, :county, :email, :msg)");

	$stmt->execute([
		':name' => $name,
		':lastname' => $lastname,
		':phone' => $phone,
		':county' => $county,
		':email' => $email,
		':msg' => $msg
	]);	
} catch(Exception $e) {
	echo "Deu erro: " . $e->getMessage() . "<br>";
}
echo "Hello " . $name . " your email is " . $email;
echo "<br>";
echo "Your phone is " . $phone;
echo "<br>";
echo "You are from " . $county;
echo"<br>";
echo "Your message: " . $msg;

?>

