<?php 

$name = $_POST['user__name'];
$phone = $_POST['user__phone'];
$email = $_POST['user__email'];
$msg = $_POST['user__message'];
$call = $_POST['is-callback'];


require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'muhidaeva-ta@mail.ru';                 // Наш логин
$mail->Password = 'asusxerox1990';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('muhidaeva-ta@mail.ru', 'Tatiana');   // От кого письмо 
$mail->addAddress('batagaeva.ta@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

if($call) {
	$mail->Subject = 'С сайта Балаклавы. Обратный звонок';
} else {
	$mail->Subject = 'С сайта Балаклавы. Заявка';
}


$mail->Body    = '
	Пользователь оставил свои данные <br> 
	Имя: ' . $name . ' <br>
	Телефон: ' . $phone . ' <br>
	Электронный адрес: ' . $email . ' <br>
	Сообщение: ' . $msg . '';
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>