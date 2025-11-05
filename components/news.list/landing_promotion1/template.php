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
    <section class="section__promotion">
        <section class="section__promotion__info">
            <h6 class="section__promotion__title">Акции</h6>
            <p class="section__promotion__description">В разделе "Акции" мы собрали <br>самые выгодные предложения <br>на наши товары и услуги.</p>
            <img class="section__promotion__image" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/promotion_vector.svg" alt="">
        </section>

        <section class="section__promotion__list">
            <div class="section__promotion__list__container">
                <?php foreach($arResult["ITEMS"] as $arItem): ?>
                    <?php if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
                        <article class="section__promotion__list__element">
                            <img class="section__promotion__list__element__image" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>">
                            <h6 class="section__promotion__list__element__title"><?= isset($arItem["NAME"]) ? $arItem["NAME"] : ""; ?></h6>
                            <p class="section__promotion__list__element__description"><?= isset($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : ""; ?></p>
                            <a class="section__promotion__list__element__link" href="#"><?= isset($arItem["DETAIL_TEXT"]) ? $arItem["DETAIL_TEXT"] : ""; ?></a>
                        </article>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <div class="section__promotion__buttons__container">
                <button class="button__arrow">
                    <img class="button__left__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/button_arrow_left.svg" alt="">
                </button>
                <button class="button__arrow">
                    <img class="button__right__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/button_arrow_right.svg" alt="">
                </button>
            </div>
        </section>
    </section>
<?php endif; ?>