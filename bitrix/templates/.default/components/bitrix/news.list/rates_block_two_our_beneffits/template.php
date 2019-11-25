<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<? $img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>100, 'height' => 100),BX_RESIZE_IMAGE_EXACT )?>

    <div class="col-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="rates-pros-tmb">
            <div class="rates-pros-tmb-pic"><img src="<?=$img["src"];?>"></div>
            <div class="rates-pros-tmb-descr">
                <p><?=$arItem["NAME"]?></p>
            </div>
        </div>
    </div>
    
    
<?endforeach;?>