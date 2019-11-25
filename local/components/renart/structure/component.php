<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$urlTemplates = array(
	"main" => "/",
	
	/*ЧПУ ДЛЯ ШТАТА*/
	"state" => "#STATE_CODE#/",
	"state_services" => "#STATE_CODE#/services/",
	"state_services_detail" => "#STATE_CODE#/services/#SERVICE_CODE#/",
	"state_rates" => "#STATE_CODE#/rates/",
	"state_contacts" => "#STATE_CODE#/contacts/",
	
	
	/*ЧПУ ДЛЯ РЕГИОНА*/
	"region" => "#STATE_CODE#/#REGION_CODE#/",
	"region_services" => "#STATE_CODE#/#REGION_CODE#/services/",
	"region_services_detail" => "#STATE_CODE#/#REGION_CODE#/services/#SERVICE_CODE#/",
	"region_rates" => "#STATE_CODE#/#REGION_CODE#/rates/",
	"region_contacts" => "#STATE_CODE#/#REGION_CODE#/contacts/",
	
	
	/*ЧПУ ДЛЯ ЛОКАЦИИ*/
	"location" => "#STATE_CODE#/#REGION_CODE#/#LOCATION_CODE#/",
	"location_services" => "#STATE_CODE#/#REGION_CODE#/#LOCATION_CODE#/services/",
	"location_services_detail" => "#STATE_CODE#/#REGION_CODE#/#LOCATION_CODE#/services/#SERVICE_CODE#/",
	"location_rates" => "#STATE_CODE#/#REGION_CODE#/#LOCATION_CODE#/rates/",
	"location_contacts" => "#STATE_CODE#/#REGION_CODE#/#LOCATION_CODE#/contacts/",
	
);


	$arVariables = array();
	$engine = new CComponentEngine($this);
	if (\Bitrix\Main\Loader::includeModule('iblock'))
	{
		$engine->addGreedyPart("#SECTION_CODE_PATH#");
		$engine->setResolveCallback(array("CIBlockFindTools", "resolveComponentEngine"));
	}
	$arUrlTemplates = CComponentEngine::MakeComponentUrlTemplates($urlTemplates, $arParams["SEF_URL_TEMPLATES"]);
	// $arVariableAliases = CComponentEngine::MakeComponentVariableAliases($arDefaultVariableAliases404, $arParams["VARIABLE_ALIASES"]);

	$componentPage = $engine->guessComponentPath(
		//$arParams["SEF_FOLDER"],
		"/",
		$arUrlTemplates,
		$arVariables
	);

	if(!$componentPage && isset($_REQUEST["q"]))
		$componentPage = "search";

	$b404 = false;
	if(!$componentPage)
	{
		$componentPage = "main";
		$b404 = true;
	}
	if($componentPage == "section")
	{
		if (isset($arVariables["SECTION_ID"]))
			$b404 |= (intval($arVariables["SECTION_ID"])."" !== $arVariables["SECTION_ID"]);
		else
			$b404 |= !isset($arVariables["SECTION_CODE"]);
	}

	if($b404 && $arParams["SET_STATUS_404"]==="Y")
	{
		$folder404 = str_replace("\\", "/", $arParams["SEF_FOLDER"]);
		if ($folder404 != "/")
			$folder404 = "/".trim($folder404, "/ \t\n\r\0\x0B")."/";
		if (substr($folder404, -1) == "/")
			$folder404 .= "index.php";

		if($folder404 != $APPLICATION->GetCurPage(true))
			CHTTP::SetStatus("404 Not Found");
	}

	CComponentEngine::InitComponentVariables($componentPage, $arComponentVariables, $arVariableAliases, $arVariables);
	$arResult = array(
		"FOLDER" => $arParams["SEF_FOLDER"],
		"URL_TEMPLATES" => $arUrlTemplates,
		"VARIABLES" => $arVariables,
		"ALIASES" => $arVariableAliases
	);



?>

<?

// echo"<pre>";print_r($arResult);echo"</pre>";
// echo"<pre>";print_r($componentPage);echo"</pre>";


$this->IncludeComponentTemplate($componentPage);
?>