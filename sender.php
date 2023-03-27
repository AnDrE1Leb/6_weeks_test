<?php
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['website'];

	$to = "and01leb@gmail.com";
	$date = date ("d.m.Y");
	$time = date ("h:i");
	$from = $email;
	$subject = "Тестове завдання";


	$msg="
    Телефон: $phone /n
    Пошта: $email /n
    Посилання на сайт: $text";
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привіт, форма відправлена</p>