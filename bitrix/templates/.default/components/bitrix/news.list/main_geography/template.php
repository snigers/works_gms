<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();$this->setFrameMode(true);?>


<div class="about-map">
  <div class="about-map-pic"><img src="/layout/images/about-map.png"></div>
  <div class="about-map-pins">
  <?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="about-map-pin" style="left: <?=$arItem["PROPERTIES"]["LEFT"]["VALUE"]?>%;top: <?=$arItem["PROPERTIES"]["TOP"]["VALUE"]?>%;" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	  <div class="pic">
		  <? $img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>30, 'height' => 30),BX_RESIZE_IMAGE_EXACT )?>
		<img src="<?=$img["src"];?>">
	  </div>
	  <div class="num"><?=count($arItem["PROPERTIES"]["PHOTOS"]["VALUE"])?></div>
	  <div class="gallery">
          <?foreach ($arItem["PROPERTIES"]["PHOTOS"]["VALUE"] as $arImg):?>
              <a class="fancybox" href="<?=CFile::GetPath($arImg)?>" data-fancybox="about_gal_<?=$key + 1?>"></a>
          <?endforeach;?>
	  </div>
	</div>
  <?endforeach;?>

  </div>
</div>
          