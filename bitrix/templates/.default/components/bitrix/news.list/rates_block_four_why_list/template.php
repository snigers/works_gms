<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<? $img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>155, 'height' => 147),BX_RESIZE_IMAGE_EXACT )?>
    <div class="why-tmb" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="why-tmb-pic"><img src="<?=$img["src"];?>"></div>
        <div class="why-tmb-descr">
            <p><?=$arItem["NAME"]?></p>
        </div>
    </div>
    
<?endforeach;?>