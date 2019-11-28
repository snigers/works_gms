<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$local_page = $_SERVER["REQUEST_URI"];
if (strstr($local_page, "/?") != "")
{
	$local_page = strstr($local_page, "?", true);
	if ($local_page == "")
    {
		$local_page = "/";
    }
}
if (strlen($local_page) > 1)
{
	$local_page = trim($local_page, "/");
	$local_page = explode("/", $local_page);
} else {
    $array = array();
	$array[] = $local_page;
	$local_page = $array;
}


if ($local_page[0] != "/")
{
	$page = "";
	foreach ($local_page as $key => $arItem) {
		if ((($arItem == "services") || ($arItem == "rates") || ($arItem == "contacts") || ($arItem == "/")) && $key == (count($local_page) - 2))
		{
			$page = "/" . $arItem . "/";
			break;
		}
		if ((($arItem == "services") || ($arItem == "rates") || ($arItem == "contacts") || ($arItem == "/")) && $key == (count($local_page) - 1))
		{
			$page = "/" . $arItem . "/";
			break;
		}
		if ((($arItem == "about") || ($arItem == "reviews") || ($arItem == "blog") || ($arItem == "faq") || ($arItem == "reservation")))
		{
			$page = "";
			break;
		}
		if ((($arItem != "services") || ($arItem != "rates") || ($arItem != "contacts") || ($arItem != "about") || ($arItem != "reviews") || ($arItem != "blog") || ($arItem != "faq") || ($arItem != "reservation")))
		{
			$page = "/";
		}
	}
} else {
	$page = "/";
}
//pr($arParams["GEO_LOCATION"]);
//foreach ($_SESSION['GEO_DATA']["VARIABLES"] )
?>
<!---->
<div class="header-location">
    <a class="btn-header-location" href="#" data-location-popup=".location-suggest-popup">
        <span class="city-name" data-url="<?=$arParams["GEO_LOCATION"]['URL_SECTION']?>">
            <?if($arParams["GEO_LOCATION"]['NAME']):?>
                <?echo $arParams["GEO_LOCATION"]['NAME'];?>
            <?else:?>
                Los Angeles
            <?endif;?>
        </span>
    </a>
    <div class="location-popup location-suggest-popup">
        <div class="popup-dialog">
            <div class="popup-content">
                <div class="close close-popup"></div>
                <div class="location-suggest-name">
                    <span class="city-name">
                        <?if($arParams["GEO_LOCATION"]['NAME']):?>
                            <?echo $arParams["GEO_LOCATION"]['NAME'];?>
                        <?else:?>
                            Los Angeles
                        <?endif;?>
                    </span>
                </div>
                <div class="location-suggest-buttons">
                    <div class="btn btn-1 btn-location-yes close-popup">Yes</div>
                    <div class="btn btn-2 btn-location-choose" data-location-popup=".location-choice-popup">Regions choice</div>
                </div>
            </div>
        </div>
    </div>
    <div class="location-popup location-choice-popup">
        <div class="popup-dialog">
            <div class="popup-content">
                <div class="close"></div>
                <div class="search-form">
                    <form>
                        <div class="form-group">
                            <input type="text" name="location_search" id="location_search" placeholder="Search" required>
                            <button class="btn-search" type="submit">Search</button>
                        </div>
                    </form>
                </div>
                <div class="regions-choice-wrapper">
                    <div class="row">
                        <div class="col-12">

<!--                            <div class="h4">State</div>-->
                            <div class="regions-list-wrapper">
                                <ul class="regions-list">
                                    <?foreach($arResult["SECTIONS"] as $arState):?>
                                        <?if ($arState["IBLOCK_SECTION_ID"] == ""):?>
                                            <li>
                                                <div class="h4"><a class="region-list-link" href="<?=($page != "") ? "/" . $arState["CODE"] . $page : ""?>" data-city-id="<?=$arState['ID']?>" data-city-href="<?=$arState["CODE"] . "/"?>"><?=$arState["NAME"]?></a></div>
                                                <div class="regions-list-wrapper">
                                                    <ul class="regions-list">
														<?foreach($arResult["SECTIONS"] as $arRegion):?>
														    <?if ($arRegion["IBLOCK_SECTION_ID"] == $arState["ID"]):?>
                                                                <li>
                                                                    <div class="h4"><a class="region-list-link" href="<?=($page != "") ? "/" . $arState["CODE"] . "/" . $arRegion["CODE"] . $page : ""?>" data-city-id="<?=$arRegion['ID']?>" data-city-href="<?=$arState["CODE"] . "/" . $arRegion["CODE"] . "/"?>"><?=$arRegion["NAME"]?></a></div>
                                                                    <div class="regions-list-wrapper">
                                                                        <ul class="regions-list">
																			<?foreach($arResult["SECTIONS"] as $arLocation):?>
																				<?if ($arLocation["IBLOCK_SECTION_ID"] == $arRegion["ID"]):?>
                                                                                    <li>
                                                                                        <div class="h4"><a class="region-list-link" href="<?=($page != "") ? "/" . $arState["CODE"] . "/" . $arRegion["CODE"] . "/" . $arLocation["CODE"] . $page : ""?>" data-city-id="<?=$arLocation['ID']?>" data-city-href="<?=$arState["CODE"] . "/" . $arRegion["CODE"] . "/" . $arLocation["CODE"] . "/"?>"><?=$arLocation["NAME"]?></a></div>
                                                                                    </li>
																				<?endif;?>
																			<?endforeach;?>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            <?endif;?>
                                                        <?endforeach;?>
                                                    </ul>
                                                </div>
                                            </li>
                                        <?endif;?>
                                    <?endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<ul class="regions-list">-->
<!--    <li><a href="#">Alabama</a></li>-->
<!--    <li><a href="#">Alaska</a></li>-->
<!--    <li><a href="#">Arizona</a></li>-->
<!--    <li><a href="#">Arkansas</a></li>-->
<!--    <li><a href="#">California</a></li>-->
<!--    <li><a href="#">Colorado</a></li>-->
<!--    <li><a href="#">Connecticut</a></li>-->
<!--    <li><a href="#">Delaware</a></li>-->
<!--    <li><a href="#">Florida</a></li>-->
<!--    <li><a href="#">Georgia</a></li>-->
<!--    <li><a href="#">Hawaii</a></li>-->
<!--    <li><a href="#">Idaho</a></li>-->
<!--    <li><a href="#">Illinois</a></li>-->
<!--    <li><a href="#">Indiana</a></li>-->
<!--    <li><a href="#">Iowa</a></li>-->
<!--    <li><a href="#">Kansas</a></li>-->
<!--    <li><a href="#">Kentucky</a></li>-->
<!--    <li><a href="#">Louisiana</a></li>-->
<!--    <li><a href="#">Maine</a></li>-->
<!--    <li><a href="#">Maryland</a></li>-->
<!--    <li><a href="#">Massachusetts</a></li>-->
<!--    <li><a href="#">Michigan</a></li>-->
<!--    <li><a href="#">Minnesota</a></li>-->
<!--    <li><a href="#">Mississippi</a></li>-->
<!--    <li><a href="#">Missouri</a></li>-->
<!--    <li><a href="#">Montana</a></li>-->
<!--    <li><a href="#">Nebraska</a></li>-->
<!--    <li><a href="#">Nevada</a></li>-->
<!--    <li><a href="#">New Hampshire</a></li>-->
<!--    <li><a href="#">New Jersey</a></li>-->
<!--    <li><a href="#">New Mexico</a></li>-->
<!--    <li><a href="#">New York</a></li>-->
<!--    <li><a href="#">North Carolina</a></li>-->
<!--    <li><a href="#">North Dakota</a></li>-->
<!--    <li><a href="#">Ohio</a></li>-->
<!--    <li><a href="#">Oklahoma</a></li>-->
<!--    <li><a href="#">Oregon</a></li>-->
<!--    <li><a href="#">Pennsylvania</a></li>-->
<!--    <li><a href="#">Rhode Island</a></li>-->
<!--    <li><a href="#">South Carolina</a></li>-->
<!--    <li><a href="#">South Dakota</a></li>-->
<!--    <li><a href="#">Tennessee</a></li>-->
<!--    <li><a href="#">Texas</a></li>-->
<!--    <li><a href="#">Utah</a></li>-->
<!--    <li><a href="#">Vermont</a></li>-->
<!--    <li><a href="#">Virginia</a></li>-->
<!--    <li><a href="#">Washington</a></li>-->
<!--    <li><a href="#">West Virginia</a></li>-->
<!--    <li><a href="#">Wisconsin</a></li>-->
<!--    <li><a href="#">Wyoming</a></li>-->
<!--</ul>-->
