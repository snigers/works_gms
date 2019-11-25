<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();$this->setFrameMode(true);?>


<div class="services-list services-list-home">
  <div class="row">
  <?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	
    $url = "";
    if (isset($arParams["GEO_STATE"]))
    {
      $url .= "/". $arParams["GEO_STATE"];
    
      if (isset($arParams["GEO_REGION"]))
      {
          $url .= "/" . $arParams["GEO_REGION"];
    
          if (isset($arParams["GEO_LOCAL"]))
          {
              $url .= "/" . $arParams["GEO_LOCAL"];
          }
      }
    }
    $url .= $arItem["DETAIL_PAGE_URL"];
    ?>
	<div class="col-6 col-md-4 col-lg-3"><a class="service-tmb" href="<?=$url?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <? $img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>285, 'height' => 230),BX_RESIZE_IMAGE_EXACT )?>
		<div class="service-tmb-pic"><img src="<?=$img["src"];?>"></div>
		<div class="service-tmb-descr">
		  <div class="h3"><?=$arItem["NAME"];?></div>
		  <div class="service-tmb-text">
			<p><?=$arItem["PREVIEW_TEXT"];?></p>
		  </div>
		</div></a>
	</div>
   <?endforeach;?>

  </div>
</div>
         