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
            <section class="section__implantation__info">
				<img class="section__implantation__info__image" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/implantation_banner.svg" alt="">
				<div class="section__implantation__info__container">
					<h6 class="section__implantation__info__title">Имплантация </h6>
					<p class="section__implantation__info__description">Клиника предлагает индивидуальный подход<br>к каждому случаю, включая предварительную диагностику и планирование лечения.</p>
					<button class="section__implantation__info__button">Подробнее
						<div class="section__implantation__info__button__arrow" alt=""></div>
					</button>
				</div>
			</section>
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