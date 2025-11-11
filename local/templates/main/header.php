<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset
?>
<!DOCTYPE html>
<html>
	<head>
		
		<title>Олимп</title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

		<?php 
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/header_style.css");
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/footer_style.css");
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/cover_style.css");
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/promotion_style.css");
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/services_style.css");
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/about_style.css");
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/implantation_style.css");
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/specialists_style.css");
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/reviews_style.css");
			Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/news_style.css");

			Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/scripts/burgerMenuShowScript.js");
			Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/scripts/promotionSlider.js");
			Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/scripts/specialistsSlider.js");

			Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.googleapis.com">');
			Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>');
			Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">');
			Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">');
		?>
		<?$APPLICATION->ShowHead();?>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		<header class="header">
			<section class="header__contacts">
				<img class="contacts__logo" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo.svg" alt="">
				<ul class="contacts__list">
					<li class="list__element"> 
						<h6 class="list__element__title">Адрес:</h6>
						<div class="list__element__container">
							<p class="list__element__detail">Ул. Красный Путь, 70</p>
							<p class="list__element__detail">Ул. Жукова, 78</p>
						</div>
					</li>
					<li class="list__element">
						<h6 class="list__element__title">Режим:</h6>
						<div class="list__element__container">
							<p class="list__element__detail">Пн-Сб — 08:00-20:00</p>
							<p class="list__element__detail">Вс — 09:00-18:00</p>
						</div>
					</li>
					<li class="list__element list__element--column">
						<div class="list__element__group">
							<h6 class="list__element__title">Телефон:</h6>
							<p class="list__element__detail">+7 (3812) 47-55-74</p>
						</div>
						<div class="list__element__group">
							<h6 class="list__element__title">Почта:</h6>
							<p class="list__element__detail">stomolimp55@mail.ru</p>
						</div>
					</li>
				</ul>
				<img class="contacts__iconRAD" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/RussianDentalAssociationIcon.svg" alt="">
				<p class="contacts__signature">Стоматологическая ассоциация России</p>
				<img class="contacts__iconVisualyImpaired" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/VisuallyImpairedIcon.svg" alt="">
			</section>
			<section class="header__menu">
				<button class="mobile-menu-toggle" style="display: none;">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<nav class="header__menu__navigation">
					<a class="header__menu__navigation__link" href="#">Главная</a>
					<a class="header__menu__navigation__link" href="#">О нас
						<img class="header__menu__navigation__link__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/weui_arrow-filled.svg" alt="">
					</a>
						<ul class="header__menu__navigation__burger">
							<li class="header__menu__navigation__burger__element">
								<a class="header__menu__navigation__burger__element__link" href="#">Специалисты</a>
							</li>
							<li class="header__menu__navigation__burger__element">
								<a class="header__menu__navigation__burger__element__link" href="#">Отзывы</a>
							</li>
							<li class="header__menu__navigation__burger__element">
								<a class="header__menu__navigation__burger__element__link" href="#">Документы</a>
							</li>
						</ul>
					<a class="header__menu__navigation__link" href="#">Услуги</a>
					<a class="header__menu__navigation__link" href="#">Цены</a>
					<a class="header__menu__navigation__link" href="#">Калькулятор</a>
					<a class="header__menu__navigation__link" href="#">Акции</a>
					<a class="header__menu__navigation__link" href="#">Новости</a>
					<a class="header__menu__navigation__link" href="#">Контакты</a>
					<a class="header__menu__navigation__link" href="#">Вакансии</a>
				</nav>
				<div class="header__menu__icons">
					<img class="header__menu__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/ph_telegram-logo.svg" alt="">
					<img class="header__menu__icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/ic_baseline-whatsapp.svg" alt="">
				</div>
				<button class="main__button">
					Запись на прием
					<img class="main__button_icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/button_arrow.svg" alt="">
				</button>
			</section>

			<div class="fixed-buttons-container">
				<button class="fixed-button">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/360-view.svg" alt="3D просмотр">
				</button>
				<button class="fixed-button">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/phone.svg" alt="Телефон">
				</button>
			</div>
		</header>
		

	
						