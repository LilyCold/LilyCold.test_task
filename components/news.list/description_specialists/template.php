<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<?php if (!empty($arResult["ITEMS"])): ?>
<?php 
    // Берем второй элемент из массива
    $secondItem = isset($arResult["ITEMS"][1]) ? $arResult["ITEMS"][1] : null;
    ?>
	<section class="section__description">
		<section class="section__specialists__info">
			<div class="section__specialists__info__container">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/include/specialists_title.php",
						"EDIT_TEMPLATE" => ""
					),
					false
				);?>
            	<p class="section__specialists__info__description"><?= isset($secondItem["PREVIEW_TEXT"]) ? $secondItem["PREVIEW_TEXT"] : ""; ?></p>
			</div>
			<button class="section__implantation__info__button" id="button__specialists"><?= isset($secondItem["DETAIL_TEXT"]) ? $secondItem["DETAIL_TEXT"] : ""; ?>
				<div class="section__implantation__info__button__arrow" alt=""></div>
			</button>
        </section>
	</section>
<?php endif; ?>