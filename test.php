<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");

 use \Bitrix\Main\Service\GeoIp;
 use \Bitrix\Main\Service\GeoIp\Manager;

//phpinfo();


//$geoResult = GeoIp\Manager::getDataResult("92.50.195.50", "en");
$geoResult = GeoIp\Manager::getDataResult("209.59.129.220", "ru");
 pr($geoResult);

//if($geoResult)
//{
//	if($geoResult->isSuccess())
//		pr($geoResult->getGeoData());
//	elseif(!$geoResult->isSuccess())
//		echo "Ошибка: ".implode("\n", $geoResult->getErrorMessages());
//}
//else
//{
//	echo 'Нет данных для данного IP - адреса';
//}

// $result = GeoIp\Manager::getDataResult('209.59.129.220', "en");

use Bitrix\Main\Loader;
if (Loader::includeModule('intervolga.enrich')) {
	$result = \Intervolga\Enrich\ProviderProxy::getIpInfo('88.87.88.238');
	var_dump($result);
}

?>




<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>