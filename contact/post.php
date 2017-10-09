<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$current_date = date('d/m/Y H:i:s CST');
$content = "Date: ".$current_date."\r\nName: ".$name."\r\nEmail: ".$email."\r\nMessage: "."\r\n".$message."\r\n--------------------"."\r\n";
$compile_dir = "./protected/message.txt";
$file = fopen($compile_dir, "a+");
fwrite($file, $content);
header("Location: ./");
exit;
fclose($file);
