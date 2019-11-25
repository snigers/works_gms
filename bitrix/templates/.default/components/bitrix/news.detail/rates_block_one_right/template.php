<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>
<div class="compare-r">
    <div class="compare-item compare-item-alt compare-item-pros">
        <div class="compare-item-body">
            <div class="h3"><?=$arResult["~NAME"]?></div>
            <div class="compare-price">
                <div class="compare-price-l">
                    <div class="compare-price-num">$ <?=$arResult["PROPERTIES"]["PRICE_PER_HOUR"]["VALUE"]?></div>
                    <div class="compare-price-ttl"><?=$arResult["PROPERTIES"]["PRICE_PER_HOUR"]["NAME"]?></div>
                </div>
                <div class="compare-price-r">
					<?foreach ($arResult["PROPERTIES"]["INCLUDE_IN_STANDARD_PRICE"]["VALUE"] as $arItem):?>
                        <div class="compare-price-item">
                            <p><?=$arItem?></p>
                        </div>
					<?endforeach;?>
                </div>
            </div>
            <div class="compare-rates-wrapper">
                <div class="compare-rates-l">
                    <div class="ttl"><?=$arResult["PROPERTIES"]["TITLE_HIDDEN_FEES"]["VALUE"]?></div>
                </div>
                <div class="compare-rates-r">
                    <table class="compare-rates-table">
						<?foreach ($arResult["PROPERTIES"]["BASIC_HIDDEN_FEES"]["DESCRIPTION"] as $key => $arItem):?>
                            <tr>
                                <td class="name">
                                    <p class="big"><?=$arItem?></p>
                                </td>
                                <td class="val">
                                    <p>$<?=$arResult["PROPERTIES"]["BASIC_HIDDEN_FEES"]["VALUE"][$key]?></p>
                                </td>
                            </tr>
						<?endforeach;?>
						<?foreach ($arResult["PROPERTIES"]["OTHER_HIDDEN_FEES"]["DESCRIPTION"] as $key => $arItem):?>
                            <tr>
                                <td class="name">
                                    <p><?=$arItem?></p>
                                </td>
                                <td class="val">
                                    <p>$<?=$arResult["PROPERTIES"]["OTHER_HIDDEN_FEES"]["VALUE"][$key]?></p>
                                </td>
                            </tr>
						<?endforeach;?>
                    </table>
                </div>
            </div>
			<?if ($arResult["PROPERTIES"]["LOSING"]["VALUE"] != ""):?>
                <div class="compare-price compare-price-alt">
                    <?if ($arResult["PROPERTIES"]["MARK"]["VALUE"] == "Y"):?>
                        <div class="compare-sign"></div>
                    <?endif;?>
                    <div class="compare-price-l">
                        <div class="compare-price-num"><?=$arResult["PROPERTIES"]["LOSING"]["VALUE"]?>%</div>
                    </div>
                    <div class="compare-price-r">
                        <p><?=$arResult["PROPERTIES"]["LOSING"]["NAME"]?></p>
                    </div>
                </div>
			<?else:?>
                <div class="compare-price compare-price-alt">
					<?if ($arResult["PROPERTIES"]["MARK"]["VALUE"] == "Y"):?>
                        <div class="compare-sign"></div>
					<?endif;?>
                    <div class="compare-price-l">
                        <div class="compare-price-num">$ <?=$arResult["PROPERTIES"]["BENIFIT"]["VALUE"]?></div>
                    </div>
                    <div class="compare-price-r">
                        <p><?=$arResult["PROPERTIES"]["BENIFIT"]["NAME"]?></p>
                    </div>
                </div>
			<?endif;?>
        </div>
        <div class="compare-item-footer">
            <div class="compare-num compare-num-alt">
                <div class="ttl"><?=$arResult["PROPERTIES"]["TOTAL_BILL"]["NAME"]?></div>
                <div class="val">$ <?=$arResult["PROPERTIES"]["TOTAL_BILL"]["VALUE"]?></div>
            </div>
			<?if ($arResult["PROPERTIES"]["MARK"]["VALUE"] == "Y"):?>
                <div class="compare-footnote">
                    <p><?=$arResult["PROPERTIES"]["MARK_TEXT"]["VALUE"]?></p>
                </div>
            <?endif;?>
        </div>
    </div>
</div>