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
    <section class="section__reviews">

        <section class="section__promotion__list" id="reviews__list">
            <div class="section__promotion__list__container" id="reviews__list__container">
                <?php foreach($arResult["ITEMS"] as $index => $arItem): ?>
					<article class="section__promotion__list__element" id="reviews__list__element">
						<p class="reviews__list__element__date"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?? ""; ?> г.</p>
						<h6 class="section__promotion__list__element__title" id="reviews__list__element__title"><?= $arItem["NAME"] ?? ""; ?></h6>
						<p class="section__promotion__list__element__description" id="reviews__list__element__description"><?= $arItem["PREVIEW_TEXT"] ?? ""; ?></p>
						<a class="section__promotion__list__element__link" href="#"><?= $arItem["DETAIL_TEXT"] ?? ""; ?></a>
					</article>

					<?php if ($index === 0): ?>
						<div class="reviews__video">
							<img class="reviews__video__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/octicon_video-24.svg" alt="">
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
            </div>
        </section>
		<section class="section__promotion__list__gradelist">
					<article class="section__promotion__list__gradelist__element">
						<img class="section__promotion__list__gradelist__element__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/ya_ru 1.svg" alt="">
						<div class="section__promotion__list__gradelist__element__container">
							<h6 class="section__promotion__list__gradelist__element__grade">4,9</h6>
							<img class="section__promotion__list__gradelist__element__stars" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/Frame 602.svg" alt="">
						</div>
					</article>

					<article class="section__promotion__list__gradelist__element">
						<img class="section__promotion__list__gradelist__element__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/Логотип_2ГИС (1) 1.svg" alt="">
						<div class="section__promotion__list__gradelist__element__container">
							<h6 class="section__promotion__list__gradelist__element__grade">4,9</h6>
							<img class="section__promotion__list__gradelist__element__stars" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/Frame 602.svg" alt="">
						</div>
					</article>

					<article class="section__promotion__list__gradelist__element">
						<img class="section__promotion__list__gradelist__element__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/prodoctorov-logo 1.svg" alt="">
						<div class="section__promotion__list__gradelist__element__container">
							<h6 class="section__promotion__list__gradelist__element__grade">4.5</h6>
							<img class="section__promotion__list__gradelist__element__stars" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/Frame 603.svg" alt="">
						</div>
					</article>

					<article class="section__promotion__list__gradelist__element">
						<img class="section__promotion__list__gradelist__element__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/image 38.svg" alt="">
						<div class="section__promotion__list__gradelist__element__container">
							<h6 class="section__promotion__list__gradelist__element__grade">4.5</h6>
							<img class="section__promotion__list__gradelist__element__stars" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/Frame 603.svg" alt="">
						</div>
					</article>
				</section>
    </section>
<?php endif; ?>