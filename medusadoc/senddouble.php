<?php 

$name = $_POST['name'];
$email = $_POST ['email'];
$artistname = $_POST ['artistname'];
$numbercheck = $_POST ['numbercheck'];
$bankName = $_POST ['bankName'];
$numberbank = $_POST ['numberbank'];
$krr = $_POST ['krr'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$artistname = htmlspecialchars($artistname);
$numbercheck = htmlspecialchars($numbercheck);
$bankName = htmlspecialchars($bankName);
$numberbank = htmlspecialchars($numberbank);
$krr = htmlspecialchars($krr);

$name = urldecode($name);
$email = urldecode($email);
$artistname = urldecode($artistname);
$numbercheck = urldecode($numbercheck);
$bankName = urldecode($bankName);
$numberbank = urldecode($numberbank);
$krr = urldecode($krr);

$name = trim($name);
$email = trim($email);
$artistname = trim($artistname);
$numbercheck = trim($numbercheck);
$bankName = trim($bankName);
$numberbank = trim($numberbank);
$krr = trim($krr);



if (mail("info@vivaldilabel.com", "Заявка на отчет ", "Имя пользователя: ".$name.". E-mail: " .$email. " Имя артиста: " .$artistname. " Номер договора (чека): " .$numbercheck. " Наименование банка получателя: " .$bankName. " Номер счета: " .$numberbank. " Корр счет: " .$krr, "From: example2@mail.ru \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>
