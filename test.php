<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");



$rsSections = CIBlockSection::GetList(array(),array('IBLOCK_ID' => GEO_LOC_ID, '=CODE' => "ventura-county"), false, array("UF_GEO_EMAIL"));
if ($arSection = $rsSections->Fetch())
{
//	pr($arSection);
}
$codeSection = "/ca/ventura-county/rates/";
$codeSection = trim($codeSection, "/");

if (strlen($codeSection) >= 2) {
	$codeSection = explode("/", $codeSection);
	$count = count($codeSection) - 1;
	foreach ($codeSection as $key => $arItem) {
		if ((($arItem == "services") || ($arItem == "rates") || ($arItem == "contacts")) && (($key === $count) || ($key === ($count - 1)))) {
			$codeURL = $codeSection[$key - 1];
			break;
		}
		if ((($arItem == "about") || ($arItem == "reviews") || ($arItem == "blog") || ($arItem == "faq") || ($arItem == "reservation")) && (($key === $count) || ($key === ($count - 1)))) {
			$codeURL = $codeSection[$key - 1];
			break;
		}
		
		if ((($arItem != "services") || ($arItem != "rates") || ($arItem != "contacts") || ($arItem != "about") || ($arItem != "reviews") || ($arItem != "blog") || ($arItem != "faq") || ($arItem != "reservation")) && ($key === $count)) {
			$codeURL = $arItem;
			break;
		}
	}
	pr($codeURL);
}
?>




<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>