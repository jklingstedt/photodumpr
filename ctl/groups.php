<?php
	$action = $_GET['action'];
	include '/photodumpr/lib/templates/main.php';
	include '/photodumpr/view/groups.php';
	$groupClass = new groupClass();
	$templateClass->setTitle('group title');
	$templateClass->setBody($groupClass->init());
	$templateClass->returnMarkup();
?>