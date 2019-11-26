<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?

if(($_REQUEST['set_ok']=='Y') && $_SESSION['GEO_DATA']['ID']){
	$_SESSION['SET_GEO_DATA']='Y';
	
	$staticHtmlCache = \Bitrix\Main\Data\StaticHtmlCache::getInstance();
	$staticHtmlCache->deleteAll();
	
	echo 'Y';
}


if($_REQUEST['set_city']){
//	pr($_REQUEST['set_city']);
	
	CModule::IncludeModule("iblock");
//	$el = new CIBlockElement;
	$rsCity = CIBlockSection::GetList(Array(), Array("IBLOCK_ID"=>GEO_LOC_ID, "ID"=>$_REQUEST['set_city']), false, Array(), Array("ID", "IBLOCK_ID", "NAME", "CODE"));
	if($obEl = $rsCity->GetNextElement()){
		
//		pr($obEl);
		$arCity = $obEl->GetFields();
		//$arCity['PROPERTIES'] = $obEl->GetProperties();
		$arCityIBlockData = array(
			'NAME'=>$arCity['NAME'],
			'ID'=>$arCity['ID'],
			'CODE'=>$arCity['CODE'],
			'URL_SECTION'=> $_REQUEST['set_city_url'],
		);
	}
	
	//pr($arCityIBlockData);
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