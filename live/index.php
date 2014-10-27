<?php
/*
iComics.co Live Page
*/

error_reporting(0);
define('BASE', dirname(__FILE__));
define('VIDEO_URL_FILE', 'video.json');

/* Credentials */
require_once('config.php');

/* Add the template parser class */
require_once('../lib/viewloader.class.php');
require_once('../lib/input.class.php');

function updateVideoID() {
	$input = new InputSanitizer();
	$password = $input->post('password');
	$videoID = $input->post('videoID');

	$success = 'fail';
	$message = '';
	if ($password !== PASSWORD) {
		$message = 'Sorry! Incorrect Password.';
	}
	else {
		$jsonData['id'] = $videoID;
		$json = json_encode($jsonData);
		file_put_contents(VIDEO_URL_FILE, $json);

		$success = 'success';
		$message = 'Video successfully updated!';
	}

	$data = array();
	$data['success'] = $success;
	$data['message'] = $message;

	echo json_encode($data);
}

function loadMainPage() {
	/* Load the video file from disk */
	$videoID = '';
	$json = file_get_contents(VIDEO_URL_FILE);
	if (strlen($json)) {
		$videoData = json_decode($json);
		$videoID = $videoData->id;
	}

	// This class populates an HTML template with dynamic info
	$viewLoader = new ViewLoader(BASE.'/templates/');

	$data = array();
	$data['videoID'] = $videoID;
	$data['passwordSalt'] = SALT;

	//Process the template and render the results
	$viewLoader->load_template('main', $data);
}	

if (isset($_POST['update']))
	updateVideoID();
else
	loadMainPage();
