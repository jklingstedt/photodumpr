<?php
	class templateClass {
		var $mainTemplate = "";
		function init () {
			$this->setTemplate();
		}
		function setTemplate() {
			$this->mainTemplate = file_get_contents("/photodumpr/lib/templates/body.php");
		}
		function setTitle ($title) {
			$this->mainTemplate = str_replace('[--title--]', $title, $this->mainTemplate);
		}
		function setHead ($head) {
			$this->mainTemplate = str_replace('[--head--]', $head, $this->mainTemplate);
		}
		function setBody ($bodyContent) {
			$this->mainTemplate = str_replace('[--body--]', $bodyContent, $this->mainTemplate);
		}
		function returnMarkup () {
			echo $this->mainTemplate;
		}
	}
	$templateClass = new templateClass();
	$templateClass->init();
?>
