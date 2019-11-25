<?
// if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// use Bitrix\Main\Loader,
	// Bitrix\Main\Data\Cache;

// class MenuCatalog extends \CBitrixComponent
// {
	// protected function makeFilter($sectionCode)
	// {
		// return [
		    // '=IBLOCK_TYPE' => $this->arParams['IBLOCK_TYPE'],
		    // '=IBLOCK_CODE' => $this->arParams['IBLOCK_CODE'],
		    // '=SECTION_CODE' => $sectionCode,
		    // '=ACTIVE' => 'Y',
		// ];
	// }
	// protected function getElements($sort, $filter)
	// {
		// $cache = Cache::createInstance();
		// $cacheTime = 3600;
		// $cacheDir = '/renart/menu.catalog/'.$this->arParams['SECTION_CODE'].'/';
		// $cacheId = md5(
			// print_r(
				// [
					// $sort,
					// $filter,
				// ],
				// 1
			// )
		// );
		// if ($cache->initCache($cacheTime, $cacheId, $cacheDir))
		// { 
		    // $result = $cache->getVars(); 
		// }
		// elseif ($cache->startDataCache()) 
		// {
			// if (!Loader::includeModule('iblock'))
			// {
				// $cache->abortDataCache();
			// }
			// $menuItems = \CIBlockElement::getList($sort, $filter, false, false, [
			    // 'ID',
			    // 'NAME',
			    // 'CODE',
			    // 'DETAIL_PAGE_URL',
			// ]);
			// $result = [];
			// while ($item = $menuItems->getNext())
			// {
			    // $menuLinkItem = [];
			    // $menuLinkItem[] = $item['NAME'];
			    // $menuLinkItem[] = $item['DETAIL_PAGE_URL'];
			    // $menuLinkItem[] = [
			        // 0 => $item['DETAIL_PAGE_URL'],
			    // ];
			    // $menuLinkItem[] = [
			        // 'FROM_IBLOCK' => true,
			        // 'IS_PARENT' => false,
			        // 'DEPTH_LEVEL' => '2',
			    // ];
			    // $result[] = $menuLinkItem;
			// }
			// $cache->endDataCache($result);
		// }

		// return $result;
	// }
	// protected function getSections()
	// {
		// global $APPLICATION; 
		// $aMenuLinksExt = $APPLICATION->IncludeComponent("bitrix:menu.sections", "", array( 
		  // "IS_SEF" => "Y", 
		  // "SEF_BASE_URL" => $this->arParams['SEF_BASE_URL'], 
		  // "SECTION_PAGE_URL" => $this->arParams['SECTION_PAGE_URL'],
		  // "DETAIL_PAGE_URL" => $this->arParams['DETAIL_PAGE_URL'],
		  // "IBLOCK_TYPE" => $this->arParams['IBLOCK_TYPE'],
		  // "IBLOCK_ID" => $this->arParams['IBLOCK_ID'],
		  // "DEPTH_LEVEL" => $this->arParams['DEPTH_LEVEL'], 
		  // "CACHE_TYPE" => "A", 
		  // "CACHE_TIME" => "3600" 
		  // ), 
		// false 
		// ); 

		// return $aMenuLinksExt;
	// }

	// public function executeComponent()
	// {
		// $result = [];
		// $sections = $this->getSections();
		// foreach ($sections as &$section)
		// {
			// $sectionCode = str_replace(
				// [$this->arParams['SEF_BASE_URL'], '/'], '', 
				// $section[1]
			// );
			// $items = $this->getElements(
				// ['SORT' => 'ASC'],
				// $this->makeFilter($sectionCode)
			// );
			// if (count($items))
			// {
				// $section[3]['IS_PARENT'] = true;
			// }
			// $result[] = $section;
			// if (count($items))
			// {
				// $result = array_merge($result, $items);
			// }
		// }
		
		// return $result;
	// }
// }