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

		<form action="process.php" method= "post">
			<div>
				<label for="nome">Name:</label>
				<input type="text" name="name" id="name">
			</div>
			<div>
				<label for="email">E-mail:</label>
				<input type="email" name="email" id="email">
			</div>
			<div>
				<label for= "endereco">Endereço:</label>
				<input type="endereco" name="endereco">

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

