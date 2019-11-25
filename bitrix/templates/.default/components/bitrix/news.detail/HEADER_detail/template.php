<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="header-bottom">
    <div class="container">
        <div class="row">
            <div class="header-col-1">
                <div class="row">
                    <div class="header-logo">
                        <a href="/">
                            <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["LOGO_IMG"]["VALUE"])?>" alt="<?=$arResult["PROPERTIES"]["LOGO_ALT"]["VALUE"]?>">
                        </a>
                    </div>
                    <div class="header-text">
                        <p><?=$arResult["PROPERTIES"]["TITLE_LICENSED"]["VALUE"]?><br><?=$arResult["PROPERTIES"]["LICENSED"]["VALUE"]?></p>
                    </div>
                </div>
            </div>
            <div class="header-col-2">
                <div class="row">
                    <div class="header-location"><a class="btn-header-location" href="#" data-location-popup=".location-suggest-popup"><span>California, Los Angeles</span></a>
                        <div class="location-popup location-suggest-popup">
                            <div class="popup-dialog">
                                <div class="popup-content">
                                    <div class="close close-popup"></div>
                                    <div class="location-suggest-name"><span>California, Los Angeles</span></div>
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
                                                <div class="h4">State</div>
                                                <div class="regions-list-wrapper">
                                                    <ul class="regions-list">
                                                        <li><a href="#">Alabama</a></li>
                                                        <li><a href="#">Alaska</a></li>
                                                        <li><a href="#">Arizona</a></li>
                                                        <li><a href="#">Arkansas</a></li>
                                                        <li><a href="#">California</a></li>
                                                        <li><a href="#">Colorado</a></li>
                                                        <li><a href="#">Connecticut</a></li>
                                                        <li><a href="#">Delaware</a></li>
                                                        <li><a href="#">Florida</a></li>
                                                        <li><a href="#">Georgia</a></li>
                                                        <li><a href="#">Hawaii</a></li>
                                                        <li><a href="#">Idaho</a></li>
                                                        <li><a href="#">Illinois</a></li>
                                                        <li><a href="#">Indiana</a></li>
                                                        <li><a href="#">Iowa</a></li>
                                                        <li><a href="#">Kansas</a></li>
                                                        <li><a href="#">Kentucky</a></li>
                                                        <li><a href="#">Louisiana</a></li>
                                                        <li><a href="#">Maine</a></li>
                                                        <li><a href="#">Maryland</a></li>
                                                        <li><a href="#">Massachusetts</a></li>
                                                        <li><a href="#">Michigan</a></li>
                                                        <li><a href="#">Minnesota</a></li>
                                                        <li><a href="#">Mississippi</a></li>
                                                        <li><a href="#">Missouri</a></li>
                                                        <li><a href="#">Montana</a></li>
                                                        <li><a href="#">Nebraska</a></li>
                                                        <li><a href="#">Nevada</a></li>
                                                        <li><a href="#">New Hampshire</a></li>
                                                        <li><a href="#">New Jersey</a></li>
                                                        <li><a href="#">New Mexico</a></li>
                                                        <li><a href="#">New York</a></li>
                                                        <li><a href="#">North Carolina</a></li>
                                                        <li><a href="#">North Dakota</a></li>
                                                        <li><a href="#">Ohio</a></li>
                                                        <li><a href="#">Oklahoma</a></li>
                                                        <li><a href="#">Oregon</a></li>
                                                        <li><a href="#">Pennsylvania</a></li>
                                                        <li><a href="#">Rhode Island</a></li>
                                                        <li><a href="#">South Carolina</a></li>
                                                        <li><a href="#">South Dakota</a></li>
                                                        <li><a href="#">Tennessee</a></li>
                                                        <li><a href="#">Texas</a></li>
                                                        <li><a href="#">Utah</a></li>
                                                        <li><a href="#">Vermont</a></li>
                                                        <li><a href="#">Virginia</a></li>
                                                        <li><a href="#">Washington</a></li>
                                                        <li><a href="#">West Virginia</a></li>
                                                        <li><a href="#">Wisconsin</a></li>
                                                        <li><a href="#">Wyoming</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="h4">Region</div>
                                                <div class="regions-list-wrapper"></div>
                                                <ul class="regions-list">
                                                    <li><a href="#">Alabama</a></li>
                                                    <li><a href="#">Alaska</a></li>
                                                    <li><a href="#">Arizona</a></li>
                                                    <li><a href="#">Arkansas</a></li>
                                                    <li><a href="#">California</a></li>
                                                    <li><a href="#">Colorado</a></li>
                                                    <li><a href="#">Connecticut</a></li>
                                                    <li><a href="#">Delaware</a></li>
                                                    <li><a href="#">Florida</a></li>
                                                    <li><a href="#">Georgia</a></li>
                                                    <li><a href="#">Hawaii</a></li>
                                                    <li><a href="#">Idaho</a></li>
                                                    <li><a href="#">Illinois</a></li>
                                                    <li><a href="#">Indiana</a></li>
                                                    <li><a href="#">Iowa</a></li>
                                                    <li><a href="#">Kansas</a></li>
                                                    <li><a href="#">Kentucky</a></li>
                                                    <li><a href="#">Louisiana</a></li>
                                                    <li><a href="#">Maine</a></li>
                                                    <li><a href="#">Maryland</a></li>
                                                    <li><a href="#">Massachusetts</a></li>
                                                    <li><a href="#">Michigan</a></li>
                                                    <li><a href="#">Minnesota</a></li>
                                                    <li><a href="#">Mississippi</a></li>
                                                    <li><a href="#">Missouri</a></li>
                                                    <li><a href="#">Montana</a></li>
                                                    <li><a href="#">Nebraska</a></li>
                                                    <li><a href="#">Nevada</a></li>
                                                    <li><a href="#">New Hampshire</a></li>
                                                    <li><a href="#">New Jersey</a></li>
                                                    <li><a href="#">New Mexico</a></li>
                                                    <li><a href="#">New York</a></li>
                                                    <li><a href="#">North Carolina</a></li>
                                                    <li><a href="#">North Dakota</a></li>
                                                    <li><a href="#">Ohio</a></li>
                                                    <li><a href="#">Oklahoma</a></li>
                                                    <li><a href="#">Oregon</a></li>
                                                    <li><a href="#">Pennsylvania</a></li>
                                                    <li><a href="#">Rhode Island</a></li>
                                                    <li><a href="#">South Carolina</a></li>
                                                    <li><a href="#">South Dakota</a></li>
                                                    <li><a href="#">Tennessee</a></li>
                                                    <li><a href="#">Texas</a></li>
                                                    <li><a href="#">Utah</a></li>
                                                    <li><a href="#">Vermont</a></li>
                                                    <li><a href="#">Virginia</a></li>
                                                    <li><a href="#">Washington</a></li>
                                                    <li><a href="#">West Virginia</a></li>
                                                    <li><a href="#">Wisconsin</a></li>
                                                    <li><a href="#">Wyoming</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-phone"><a class="btn-header-phone" href="tel:<?=$arResult["PROPERTIES"]["PHONE"]["VALUE"]?>"><span><?=$arResult["PROPERTIES"]["PHONE"]["VALUE"]?></span></a></div>
                </div>
            </div>
            <div class="header-col-3">
                <div class="header-button"><a class="btn btn-1" href="#" data-toggle="modal" data-target="#quoteModal"><?=$arResult["PROPERTIES"]["TITLE_BUTTON"]["VALUE"]?></a></div>
            </div>
        </div>
    </div>
</div>
<div class="header-bottom-mob d-block d-md-none">
    <div class="row">
        <div class="col-6"><a class="btn btn-2" href="tel:<?=$arResult["PROPERTIES"]["PHONE"]["VALUE"]?>"><?=$arResult["PROPERTIES"]["TITLE_BUTTON"]["VALUE"]?></a></div>
        <div class="col-6"><a class="btn btn-1" href="<?=$arResult["PROPERTIES"]["LINK_MOBILE"]["VALUE"]?>" data-toggle="modal" data-target="#quoteModal"><?=$arResult["PROPERTIES"]["LINK_MOBILE_TITLE"]["VALUE"]?></a></div>
    </div>
</div>
