<?php
	include '/photodumpr/lib/templates/main.php';
	include '/photodumpr/view/groups.php';
	$params = array(
		"action" => $_GET['action'],
		"subaction" => $_GET['subaction'],
		"data" => $_GET['data'],
	);
	$groupClass = new groupClass();
	$groupClass->init($params);
	$templateClass->setTitle($groupClass->setTitle());
	$templateClass->setHead($groupClass->setHead());
	$templateClass->setBody($groupClass->setBody());
	$templateClass->setScripts($groupClass->setScripts());
	$templateClass->returnMarkup();
?>