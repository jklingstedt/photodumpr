<?php
	class groupClass  {
		var $params = array();
		function init($params) {
			$this->params = $params;
		}
		function setTitle() {
			return "group title dynamic";
		}
		function setHead() {
			$head = <<<HEAD
			<meta name="description" contents="group page holmes" />
			
HEAD;
			return $head;
		}
		function setBody() {
			$body = <<<BODY
			<div id="photodumpr-groups" class="groups">
				here is some markup fool
			</div>
BODY;
			return $body;
		}
		function setScripts() {
			$scripts = <<<SCRIPTS
			<script type="text/javascript" src="/lib/js/groups.js"></script>
			
SCRIPTS;
			return $scripts;
		}
	}
?>
