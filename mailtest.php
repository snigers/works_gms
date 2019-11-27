<?
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/PHPMailer/PHPMailerAutoload.php');

// инициализируем класс
$mailer = new PHPMailer;

$mailer->IsSMTP();
//$mailer->SMTPDebug = 2;
$mailer->Host = "smtp.gmail.com";
$mailer->SMTPAuth = true;
$mailer->SMTPSecure = "tsl";
$mailer->Port = 587;
$mailer->CharSet = "UTF-8";

$body = "fsjgksf ksdjfkskfjsd fs fskfskfjksfskfsjdfskdff ksf skf sdfjk";

$mailer->Username = "test.gms4yoou@gmail.com";
$mailer->Password = "dfgjHsfsdbBJFC";

$mailer->Subject = "Отправка письма";
$mailer->MsgHTML($body);
$address = "ae.renart@gmail.com";
$mailer->AddAddress($address, "Антону");



if(!$mailer->Send())
{
	echo 'Не могу отослать письмо!';
	echo $mailer->ErrorInfo;
}
else
{
	echo 'Письмо отослано!';
}
//$mailer->ClearAddresses();
//$mailer->ClearAttachments();