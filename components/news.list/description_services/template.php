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
		// Берем первый элемент из массива
		$firstItem = reset($arResult["ITEMS"]);
		?>
		<section class="section__description">
			<section class="section__services__info">
				<div class="section__services__info__container">
					
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => "/include/services_title.php",
							"EDIT_TEMPLATE" => ""
						),
						false
					);?>
					<p class="section__services__info__description"><?= isset($firstItem["PREVIEW_TEXT"]) ? $firstItem["PREVIEW_TEXT"] : ""; ?></p>
				</div>
				<button class="button_second"><?= isset($firstItem["DETAIL_TEXT"]) ? $firstItem["DETAIL_TEXT"] : ""; ?>
					<div class="button_second__arrow" alt=""></div>
				</button>
			</section>
		</section>
<?php endif; ?>