<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$endereco = $_POST['endereco'];

echo "Olá " . $name . " seu email é " . $email;
echo "<br>";
echo "Seu endereço de confirmação é " . $endereco;
echo "<br>";
echo " Sua mensagem: " . $msg