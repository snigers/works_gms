<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<?
	$geo_url = trim($_SESSION["GEO_DATA"]["URL_SECTION"], "/");
?>

<ul class="nav navbar-nav">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li><a class="link_geolocal" href="<?=(($arItem["LINK"] == "/services/" || $arItem["LINK"] == "/rates/" || $arItem["LINK"] == "/contacts/") && $geo_url != "") ? "/" . $geo_url . $arItem["LINK"] : $arItem["LINK"]?>" class="active"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a class="link_geolocal" href="<?=(($arItem["LINK"] == "/services/" || $arItem["LINK"] == "/rates/" || $arItem["LINK"] == "/contacts/") && $geo_url != "") ? "/" . $geo_url . $arItem["LINK"] : $arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>