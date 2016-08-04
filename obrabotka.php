<meta charset="UTF-8">
<?
$recipient = "test@dobraya.hol.es";
$subject = "Заказ";
$message = "<html>\n<body>\n\n<b>".$_POST["fio"]."</b>, установил пароль - <b>".$_POST["pass"]."</b>\n
Указал свой адрес - <b>".$_POST["email"]."</b>\n
Выбрал вариант носителя - <b>".$_POST["disc"]."</b>\n
Хочет видеть на диске следующие курсы: <b>".$check = ''; if (!empty($_POST["check"]) && is_array($_POST["check"])) { $check = implode(" ", $_POST["check"]); }."</b>\n
Хочет вариант доставки - <b>".$_POST["delivery"]."</b>\n
Адрес и примечание - ".$_POST["address"]."\n</html>\n</body>\n";

$headers = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=utf-8' . "\r\n" . 'From: ' . $_POST["email"];
$verify = mail($recipient, $subject, $message, $headers);
if ($verify == true)
{
echo "<p>Сообщение отправлено</p>";
}
else
{
echo "<p>Сообщение не отправлено</p>";
}
?>