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
	<section class="section__services">
		<section class="section__services__info">
			<div class="section__services__info__container">
				<h1 class="section__services__info__title">Все <span class="color_blue">необходимые услуги</span> в одном месте</h1>
				<p class="section__services__info__description">В нашей стоматологической клинике мы предлагаем широкий спектр услуг, чтобы удовлетворить все ваши потребности в уходе за зубами и полостью рта. </p>
			</div>
			<button class="button_second">Смотреть все услуги
				<div class="button_second__arrow" alt=""></div>
			</button>
		</section>

		<?php 
		// Берем первый элемент из массива
		$firstItem = reset($arResult["ITEMS"]);
		?>

		<section class="section__services__list">
			<?php if (!empty($firstItem["PREVIEW_PICTURE"]["SRC"])): ?>
				<article class="section__services__list__first"
						style="background-image: url(<?= $firstItem["PREVIEW_PICTURE"]["SRC"]; ?>);">
					<p class="section__services__list__first__description"><?= isset($firstItem["PREVIEW_TEXT"]) ? $firstItem["PREVIEW_TEXT"] : ""; ?></p>
					<h6 class="section__services__list__first__title"><?= isset($firstItem["NAME"]) ? $firstItem["NAME"] : ""; ?></h6>
				</article>
			<?php endif; ?>
			<?php foreach(array_slice($arResult["ITEMS"], 1) as $arItem): ?>
				<?php if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
					<article class="section__services__list__element" 
						style="background-image: url(<?= $arItem["PREVIEW_PICTURE"]["SRC"]; ?>);">
						<h6 class="section__services__list__element__title"><?= isset($arItem["NAME"]) ? $arItem["NAME"] : ""; ?></h6>
					</article>
				<?php endif; ?>
			<?php endforeach; ?>
		</section>
	</section>
<?php endif; ?>