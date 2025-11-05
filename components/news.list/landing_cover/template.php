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
    <?php if (!empty($firstItem["PREVIEW_PICTURE"]["SRC"])): ?>
        <section class="section__cover" style="
            background-image: 
                linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(8, 62, 84, 0.5) 100%),
                url(<?= $firstItem["PREVIEW_PICTURE"]["SRC"]; ?>);
            ">
            <h1 class="section__cover__title"><?= isset($firstItem["NAME"]) ? $firstItem["NAME"] : ""; ?></h1>
            <p class="section__cover__description"><?= isset($firstItem["PREVIEW_TEXT"]) ? $firstItem["PREVIEW_TEXT"] : ""; ?></p>
            <button class="main__button">
                    Запись на прием
                    <img class="main__button_icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/button_arrow.svg" alt="">
            </button>
        </section>
    <?php endif; ?>
<?php endif; ?>