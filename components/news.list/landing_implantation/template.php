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
        <section class="section__implantation">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/include/implantation_info.php",
					"EDIT_TEMPLATE" => ""
				),
				false
			);?>

			<section class="section__implantation__implants">
				<h6 class="section__implantation__implants__title"><?= isset($firstItem["NAME"]) ? $firstItem["NAME"] : ""; ?></h6>
				<p class="section__implantation__implants__description"><?= isset($firstItem["PREVIEW_TEXT"]) ? $firstItem["PREVIEW_TEXT"] : ""; ?></p>
				<img class="section__implantation__implants__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/stats.svg" alt="">
			</section>
			<section class="section__implantation__guarantee">
				<div class="section__implantation__guarantee__container">
					<img class="section__implantation__guarantee__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/quality.svg" alt="">
					<h3 class="section__implantation__guarantee__title">Пожизненная гарантия на наше лечение!</h3>
				</div>
				<p class="section__implantation__guarantee__description">Мы обеспечим надежность и долговечность каждого проведенного лечения.</p>
			</section>
        </section>
<?php endif; ?>