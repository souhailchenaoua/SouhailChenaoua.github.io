<?php
if(isset($_POST['submit'])){
$name =$_POST['name'];
$mailfrom =$_POST['mail'];
$message= $_POST['message'];

$mailTo = "s201748090@kfupm.edu.sa";
$headers = "From: ".$mailfrom;
$txt = "you have recieved an e-mail from" .$name ."\n\n". $message;
mail($mailTo, $subject, $txt, $headers);
header("location: index.php?mailsend");

}
?>
