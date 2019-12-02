<?
// require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
// $APPLICATION->SetPageProperty("TITLE", "Gentlemen's Moving Company");
// $APPLICATION->SetTitle("Gentlemen's Moving Company");

// if (geoip_db_avail(GEOIP_COUNTRY_EDITION))
    // print geoip_database_info(GEOIP_COUNTRY_EDITION);
 phpinfo();

// use \Bitrix\Main\Service\GeoIp;
// use \Bitrix\Main\Service\GeoIp\Manager;
/*

$geoResult = GeoIp\Manager::getDataResult('209.59.129.220');

if($geoResult)
{
    if($geoResult->isSuccess())
        pr($geoResult->getGeoData());
    elseif(!$geoResult->isSuccess())
        echo "Ошибка: ".implode("
\n", $geoResult->getErrorMessages());
}
else
{
    echo 'Нет данных для данного IP - адреса';
}


*/

echo GEOIP_COUNTRY_EDITION;

print_r(geoip_database_info(GEOIP_COUNTRY_EDITION));










// require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
