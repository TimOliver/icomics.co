<?php
/*
iComics.co Home Page
*/

error_reporting(0);
define('BASE', dirname(__FILE__));

/* Add the template parser class */
require_once('lib/viewloader.class.php');

/* Import all of the localised strings */
require_once('strings.include.php');

//See if a language code was supplied
$lang = $_GET['lang'];
$langSuffix = '';

//Right now, only English and Japanese are supported.
if ($lang!='jp')
{
	$lang = 'en';
}
else
{
	$langSuffix = 'JP';
	$lang = 'ja';
}

// This class populates an HTML template with dynamic info
$viewLoader = new ViewLoader(BASE.'/templates/');

$data = array();
$data['langSuffix'] = $langSuffix; 	//used for asset file names
$data['langCode'] 	= $lang;		//used for language metadata

//All of the localised strings for the website
$data = array_merge($data, $localisedStrings[$lang]);

//Process the template and render the results
$viewLoader->load_template('main', $data);
