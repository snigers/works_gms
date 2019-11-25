<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<? if ($key%2 == 0): ?>
        <div class="article-block" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="row">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="h4 orange"><?= $arItem["NAME"] ?></div>
                    <ul class="ul-alt">
						<? foreach ($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"] as $arLi): ?>
                            <li><?= $arLi ?></li>
						<? endforeach; ?>
                    </ul>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2">
                    <div class="article-pic"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"] ?>"></div>
                </div>
            </div>
        </div>
    <?else:?>
        <div class="article-block" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="row">
            <div class="col-12 col-md-6">
                <div class="article-pic"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"] ?>"></div>
            </div>
            <div class="col-12 col-md-6">
                <div class="h4 orange"><?= $arItem["NAME"] ?></div>
                <ul class="ul-alt">
					<? foreach ($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"] as $arLi): ?>
                        <li><?= $arLi ?></li>
					<? endforeach; ?>
                </ul>
            </div>
            </div>
        </div>
    
	<? endif ?>
<?endforeach;?>