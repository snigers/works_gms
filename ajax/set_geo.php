<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?

$name = $_REQUEST['set_city'];
if (strpos($name, ", ") > 0)
{
	$name = explode(", ", $name);
	$name = $name[1];
}


if(($_REQUEST['set_ok']=='Y') && $_SESSION['GEO_DATA']['ID']){
	$_SESSION['SET_GEO_DATA']='Y';
	
	$staticHtmlCache = \Bitrix\Main\Data\StaticHtmlCache::getInstance();
	$staticHtmlCache->deleteAll();
	
	echo 'Y';
}


if($_REQUEST['set_city']){
	
	CModule::IncludeModule("iblock");
	$rsCity = CIBlockSection::GetList(Array(), Array("IBLOCK_ID"=>GEO_LOC_ID, "NAME"=>$name), false, Array(), Array("ID", "IBLOCK_ID", "NAME", "CODE"));
	if($obEl = $rsCity->GetNextElement()){
		
		$arCity = $obEl->GetFields();
		$arCityIBlockData = array(
			'NAME'=>$arCity['NAME'],
			'FULL_NAME'=>$_REQUEST['set_city'],
			'ID'=>$arCity['ID'],
			'CODE'=>$arCity['CODE'],
			'URL_SECTION'=> $_REQUEST['set_city_url'],
		);
	}
	
	if($arCityIBlockData){
		$_SESSION['SET_GEO_DATA']='Y';
		$_SESSION['GEO_DATA'] = $arCityIBlockData;
		
		$staticHtmlCache = \Bitrix\Main\Data\StaticHtmlCache::getInstance();
		$staticHtmlCache->deleteAll();
		
		echo 'Y';
	}
}

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>