<?php
$user = 'root';
$pass = 'localenv';
$dbh = new PDO('mysql:host=localhost;dbname=hyrlatest', $user, $pass, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


$id = $_GET['id'];

$sql = 'SELECT * FROM users WHERE id =:id ORDER BY name';	
$stmt = $dbh->prepare($sql);
$stmt->execute([':id' => $id]);

$result = $stmt->fetch();

//var_dump($result);
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">

	</head>
	<body>
		<div class="title" >
		<?php
		echo "Form da Hyrla";
		?>	
		</div>
		<h4 class="field"> Please complete the form below. Mandatory field in red. </h4>
		<div>
			<a href="list.php">Listar</a>
		</div>
		<form action="process.php" method= "post">
			<div>
				<label for="name"> First Name:</label>
				<input type="text" name="name" id="name" value="<?=$result['name']?>">
			</div>
			<div>
				<label for="lastname">Last Name:</label>
				<input type="text" name="last" id="last" value="<?=$result['lastname']?>">
			</div>
			<div class="email">

				<label for="email">E-mail:</label>
				<input type="email" required="required" class="input-text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
			</div>
			<div>
				<label for= "phone">Phone:</label>
				<input type="tel" required="required" maxlength="15" name="phone" pattern="\([0-9]{2}\)[0-9]{4,6}-[0-9]{3,4}$" placeholder="(xx)xxxx-xxxx" />
			</div>
			<div>
				<label for="county">County</label> 
				<input type="text" name="county"  id="county" value="<?=$result['county']?>">
			</div>
			<div>
				<label for="msg" class="msg">Message:</label>
				<textarea name="msg" id="msg"></textarea>
			</div>
			<div class="button">
				<button type="submit">Send your message</button>
			</div>
		</form>


	</body>
</html>

