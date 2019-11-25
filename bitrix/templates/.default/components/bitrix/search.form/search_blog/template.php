<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<form action="<?=$arResult["FORM_ACTION"]?>">
    <div class="form-group">
		<?if($arParams["USE_SUGGEST"] === "Y"):?>
            <?$APPLICATION->IncludeComponent(
                "bitrix:search.suggest.input",
                "",
                array(
                    "NAME" => "q",
                    "VALUE" => "",
                    "INPUT_SIZE" => 15,
                    "DROPDOWN_SIZE" => 10,
                ),
                $component, array("HIDE_ICONS" => "Y")
            );?>
        <?else:?>
            <input type="text" name="search_blog" id="search_input" placeholder="Search" required>
        <?endif;?>
            <button class="btn-search" name="s" type="submit">Search</button>
    </div>
</form>