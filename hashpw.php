<?php
//echo strtoupper("Hello WORLD!");
if (isset($_POST['passwordToHash'])){
//phpinfo();
//echo $_POST['passwordToHash'];

$password = $_POST['passwordToHash'];
$hashedPass = sha1($password);
$hashedUpper = mb_strtoupper($hashedPass);
//echo $hashedUpper;
//echo $hashedPass;
//print_r($_POST);
header("Location: https://api.pwnedpasswords.com/pwnedpassword/$hashedUpper");
}
else {
	header("Location:./index.html");
	exit();
	//print_r($_POST);		
}

?>
