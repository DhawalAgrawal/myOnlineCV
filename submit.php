<?php include('config.php'); ?>
<?php 
$rid       = mt_rand() ;
$name     = $_POST['name'];
$email     = $_POST['email'];
$message    = $_POST['message'];

$save = mysql_query("INSERT INTO `dhawal`.`MessageDhawal` (`rid`, `name`, `email`, `message`, `date`) VALUES ('$rid', '$name', '$email', '$message', now());");
header( 'location:index.php?status=Sumitted Successfully.' );  exit(); 