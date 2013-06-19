<?php
/*
iComics.co Home Page
*/

error_reporting( E_NONE );
define( 'BASE', dirname(__FILE__) );

require_once('lib/viewloader.class.php');

//See if a language code was supplied (Right now, only English and Japanese)
$lang = $_GET['lang'];
if ($lang!='jp')
	$lang = 'en';
else
	$lang = 'ja';

$viewLoader = new ViewLoader(BASE.'/templates/');

$data['langCode'] = $lang;
$data = array_merge($data, $languageStrings[$lang]);

$viewLoader->load_template('main', $data);
