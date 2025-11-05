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
    <section class="section__specialists">
        <section class="section__specialists__info">
			<div class="section__specialists__info__container">
				<h6 class="section__specialists__info__title">Наши <span class="color_blue">специалисты</span></h6>
            	<p class="section__specialists__info__description">В нашей стоматологической клинике работает команда высококвалифицированных специалистов, каждый из которых обладает богатым опытом и глубокими знаниями в своей области. </p>
			</div>
			<button class="section__implantation__info__button" id="button__specialists">Подробнее
				<div class="section__implantation__info__button__arrow" alt=""></div>
			</button>
        </section>

        <section class="section__promotion__list" id="specialists__list">
            <div class="section__promotion__list__container">
                <?php foreach($arResult["ITEMS"] as $arItem): ?>
                    <?php if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
                        <article class="section__promotion__list__element" id="specialists__list__element">
                            <img class="section__promotion__list__element__image" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>">
                            <h6 class="section__promotion__list__element__title" id="specialists__list__element__title"><?= isset($arItem["NAME"]) ? $arItem["NAME"] : ""; ?></h6>
                            <p class="section__promotion__list__element__description"><?= isset($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : ""; ?></p>
                            <a class="section__promotion__list__element__link" id="specialists__list__element__link" href="#"><?= isset($arItem["DETAIL_TEXT"]) ? $arItem["DETAIL_TEXT"] : ""; ?></a>
                        </article>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <div class="section__promotion__buttons__container" id="section__specialists__buttons">
                <button class="button__arrow">
                    <img class="button__left__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/button_arrow_left.svg" alt="">
                </button>
				<div class="slider-dots">
					<button class="slider-dot active" data-slide="0"></button>
					<button class="slider-dot" data-slide="1"></button>
					<button class="slider-dot" data-slide="2"></button>
					<button class="slider-dot" data-slide="3"></button>
				</div>
                <button class="button__arrow">
                    <img class="button__right__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/button_arrow_right.svg" alt="">
                </button>
            </div>
        </section>
    </section>
<?php endif; ?>