<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="container py-3">
	<div class="row">
		<div class="col-lg-6">
			<a href="/" class="c-yablack c-h-yablack text-decoration-none d-flex align-items-center">
				<img src="<?= SITE_TEMPLATE_PATH.'/assets/images/header-logo.svg';?>" />
				<div class="yaw-1px bg-yablack h-100 mx-2"></div>
				<div class=""><?= htmlspecialcharsbx(\Sollers\Settings\Config\SiteSettings::getSiteName());?></div>
			</a>
		</div>
		<div class="col-lg-6 d-flex justify-content-end align-items-center">
			<a href="tel:<?= htmlspecialcharsbx(\Sollers\Settings\Config\SiteSettings::getPhoneNormalized()) ?>" class="me-3">
				<?= htmlspecialcharsbx(\Sollers\Settings\Config\SiteSettings::getPhoneFormatted()) ?>
			</a>
			<a href="<?= htmlspecialcharsbx(\Sollers\Settings\Config\SiteSettings::getYandexMapUrl()) ?>" class="">
				<?= htmlspecialcharsbx(\Sollers\Settings\Config\SiteSettings::getAddress()) ?>
			</a>
		</div>
	</div>
</div>








<?if (!empty($arResult)):?>
<ul class="left-menu">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>