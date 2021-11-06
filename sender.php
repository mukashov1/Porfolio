<?php
    $name = $_POST['name'];
    // $surname = $_POST['surname'];
	// $phone = $_POST['phone'];
    // $email = $_POST['email'];
    // $text = $_POST['text'];

	$to = "bakdaulet.mukashov@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>
