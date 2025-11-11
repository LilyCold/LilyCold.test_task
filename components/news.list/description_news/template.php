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
    // Берем четвертый элемент из массива
    $secondItem = isset($arResult["ITEMS"][3]) ? $arResult["ITEMS"][3] : null;
    ?>

	<section class="section__description">
        <section class="section__specialists__info">
			<div class="section__specialists__info__container">
				<h6 class="section__specialists__info__title">Новости</h6>
            	<p class="section__specialists__info__description">В нашем разделе "Новости" мы делимся актуальной информацией о нашей клинике, новых<br>услугах и мероприятиях. Следите за обновлениями, чтобы не пропустить важные события!</p>
			</div>
			<button class="section__implantation__info__button">Смотреть все
				<div class="section__implantation__info__button__arrow" alt="">
            </button>
        </section>
	</section>
<?php endif; ?>