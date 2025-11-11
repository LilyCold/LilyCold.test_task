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

<?php
// Массив соответствий ID элемента и имени файла иконки
$iconMap = [
    9 => 'avatar.svg',
    10 => 'calendar.svg',
    11 => 'dental-implant.svg',
    12 => 'tooth-hygiene.svg',
];
?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <section class="section__about">
            <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/about_head.php",
                "EDIT_TEMPLATE" => ""
            ),
            false
        );?>

        <section class="section__about__list">
            <?php foreach($arResult["ITEMS"] as $arItem): ?>
				<?php
					$iconFile = $iconMap[$arItem["ID"]];
				?>
                <article class="section__about__list__element">
                    <img class="section__about__list__element__image" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/<?=$iconFile?>" alt="">
					<div class="section__about__list__element__container">
						<h6 class="section__about__list__element__title"><?= isset($arItem["NAME"]) ? $arItem["NAME"] : ""; ?></h6>
						<p class="section__about__list__element__description"><?= isset($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : ""; ?></p>
					</div>
                </article>
            <?php endforeach; ?>

            <div class="section__about__banner">
                <h6 class="section__about__banner__title">Клиника “Олимп” — с вами на пути к вершине здоровья!</h6>
            </div>
        </section>
    </section>
<?php endif; ?>