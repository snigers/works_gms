<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?foreach($arResult["SECTION_NAME"] as $arSection):?>
    <div class="faq-item">
        <div class="faq-item-ttl">
            <div class="h3"><?=$arSection["NAME"]?></div>
        </div>
        <div class="faq-item-content">
            <?foreach ($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
                <?if ($arItem["IBLOCK_SECTION_ID"] == $arSection["ID"]):?>
                    <div class="faq-item faq-item-inner"id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="faq-item-ttl">
                            <div class="h3"><?=$arItem["NAME"]?></div>
                        </div>
                        <div class="faq-item-content">
							<?=$arItem["~PREVIEW_TEXT"]?>
                            <div class="btn-collapse"></div>
                        </div>
                    </div>
                <?endif;?>
            <?endforeach;?>
            <div class="btn-collapse"></div>
        </div>
    </div>
<?endforeach;?>