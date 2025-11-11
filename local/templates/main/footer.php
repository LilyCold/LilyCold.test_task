<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

	<footer class="footer">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/footer_top.php",
				"EDIT_TEMPLATE" => ""
			),
			false
		);?>

		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => "/include/footer_bottom.php",
				"EDIT_TEMPLATE" => ""
			),
			false
		);?>
	</footer>
	</body>
</html>