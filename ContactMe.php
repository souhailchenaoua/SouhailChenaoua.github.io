<?php
if(isset($_POST['submit'])){
$name =$_POST['name'];
$mailfrom =$_POST['mail'];
$message= $_POST['message'];

$mailTo = "souhail.chenaoua@gmail.com";
$headers = "From: ".$mailfrom;
$txt = "you have recieved an e-mail from" .$name ."\n\n". $message;
mail($mailTo, $txt, $headers);
header("location: index.php?mailsend");

}
?>
