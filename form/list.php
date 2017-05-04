
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Informações</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php 
try {
	$user = 'root';
	$pass = 'localenv';
	$dbh = new PDO('mysql:host=localhost;dbname=hyrlatest', $user, $pass, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


	$sql = 'SELECT * FROM users ORDER BY name';	
	$result = $dbh->query($sql);
} catch(Exception $e) {
	echo "Erro: " . $e->getMessage();
}

echo '<table class="table" >';
echo "
<tr>
	<th>Nome</th>
	<th>Lastname</th>
	<th>Messages</th>
	<th>County</th>
	<th>Email</th>

</tr>
";
foreach ($result as $row) {
 echo "<tr>";	
	 echo "<td>" . $row['name'] . "</td>";
	 echo "<td>" . $row['lastname'] . "</td>";
	 echo "<td>" . $row['email'] . "</td>";
	 echo "<td>" . $row['msg'] . "</td>";
	 echo "<td>" . $row['county'] . "</td>";
 echo "</tr>";	
}
echo "</table>";
?>
</body>
</html>