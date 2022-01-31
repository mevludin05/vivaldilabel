<?php 

$name = $_POST['name'];
$email = $_POST ['email'];
$artistname = $_POST ['artistname'];
$numbercheck = $_POST ['numbercheck'];
$form = $_POST ['form'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$artistname = htmlspecialchars($artistname);
$numbercheck = htmlspecialchars($numbercheck);
$form = htmlspecialchars($form);

$name = urldecode($name);
$email = urldecode($email);
$artistname = urldecode($artistname);
$numbercheck = urldecode($numbercheck);
$form = urldecode($form);

$name = trim($name);
$email = trim($email);
$artistname = trim($artistname);
$numbercheck = trim($numbercheck);
$form = trim($form);



if (mail("info@vivaldilabel.com", "Заявка на отчет ", "Имя пользователя: ".$name.". E-mail: " .$email. " Имя артиста: " .$artistname. " Номер договора (чека): " .$numbercheck. " Форма отчета: " .$form, "From: example2@mail.ru \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>
