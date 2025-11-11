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

			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/include/header_contacts.php",
					"EDIT_TEMPLATE" => ""
				),
				false
			);?>

			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/include/header_menu.php",
					"EDIT_TEMPLATE" => ""
				),
				false
			);?>

			<div class="fixed-buttons-container">
				<button class="fixed-button">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/360-view.svg" alt="3D просмотр">
				</button>
				<button class="fixed-button">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/phone.svg" alt="Телефон">
				</button>
			</div>
		</header>
		

	
						