<?php
$name = $_POST['name'];
$last = $_POST['last'];
$phone = $_POST['phone'];
$county = $_POST['county'];
$email = $_POST['email'];
$msg = $_POST['msg'];

echo "Hello " . $name . " your email is " . $email;
echo "<br>";
echo "Your phone is " . $phone;
echo "<br>";
echo "You are from " . $county;
echo"<br>";
echo "Your message: " . $msg;

?>

