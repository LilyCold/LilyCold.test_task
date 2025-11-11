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
    // Берем третий элемент из массива
    $secondItem = isset($arResult["ITEMS"][2]) ? $arResult["ITEMS"][2] : null;
    ?>

<section class="section__description">
	<section class="section__reviews__info">
			<div class="section__reviews__info__container">
				<h6 class="section__promotion__title">Отзывы</h6>
				<p class="section__promotion__description">В этом разделе вы найдете мнения и впечатления наших клиентов о предоставляемых услугах.<br>Мы ценим каждое ваше мнение, так как оно помогает нам становиться лучше.</p>
			</div>
			<button class="button_second" id="button_reviews">Смотреть все
				<div class="button_second__arrow" alt=""></div>
			</button>
        </section>
</section>
<?php endif; ?>