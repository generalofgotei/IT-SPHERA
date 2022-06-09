<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$message = htmlspecialchars($message);

$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);
$message = urldecode($message);

$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$message = trim($message);

echo $name;echo "<br>";
echo $email;echo "<br>";
echo $phone;echo "<br>";
echo $message;
$sendTo = "kenzhibaev@kipspb.ru";
$theme = "Новое сообщение с сайта Сфера IT";
$letter = $name;
$letter .= $email;
$letter .= $phone;
$letter .= $message;
mail($sendTo, $theme, $letter);
//echo $email;
//if (mail("example@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
// {     echo "сообщение успешно отправлено";
//} else {
//    echo "при отправке сообщения возникли ошибки";
?>