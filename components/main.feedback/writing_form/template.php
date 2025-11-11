<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<section class="section__form">
	<div class="section__form__container">
		<h3 class="section__form__title">Запишитесь на консультацию</h3>
		<input class="section__form__input" type="text" name="username" placeholder="<?=GetMessage("MFT_NAME")?>">
		<input class="section__form__input" type="tel" name="phone" placeholder="<?=GetMessage("MFT_PHONE")?>">
		<textarea class="section__form__textarea" name="message" placeholder="<?=GetMessage("MFT_MESSAGE")?>"></textarea>
		<label class="section__form__checkbox">
			<input type="checkbox"> 
			<span class="checkmark"></span>
				Нажимая на кнопку, вы даете согласие на обработку<br> 
				персональных данных и соглашаетесь c политикой конфиденциальности.
		</label>

		<button class="button_second" id="white__button">Записаться
			<div class="button_second__arrow" alt=""></div>
		</button>
	</div>
	<img class="form__banner" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/Image.png" alt="">
</section>