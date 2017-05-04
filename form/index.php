<html>
	<head>
		<link rel="stylesheet" type="text/css" href="form/styles.css">
	</head>
	<body>
		<div class="title" >
		<?php
		echo "Form da Hyrla";
		?>	
		</div>
		<h4 class="field"> Please complete the form below. Mandatory field in red. </h4>

		<form action="form/process.php" method= "post">
			<div>
				<label for="name"> First Name:</label>
				<input type="text" name="name" id="name">
			</div>
			<div>
				<label for="last">Last Name:</label>
				<input type="text" name="last" id="last">
			</div>
			<div class="email">

				<label for="email">E-mail:</label>
				<input type="email" name="email" id="email">
			</div>
			<div>
				<label for= "phone">Phone:</label>
				<input type="text" name="phone" id="phone">
			</div>
			<div>
				<label for="county">County</label> 
				<input type="text" name="county"  id="county">
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

