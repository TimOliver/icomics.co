<?php
/*
* iComics Support Mailer
* By TiM
*/

require_once('lib/input.class.php');
require_once('lib/mailer.class.php');

$input 	= new InputSanitizer(array('name','email', 'message'));
$mail 	= new Mailer(array('wordwrap'=>false));

if (strlen($input->post('message')) == 0)
{
	echo '1';
	die();
}

$mail->to('Tim Oliver <icomics@timoliver.com.au>');
$mail->from('iComics.co <support@icomics.co>');
$mail->subject('iComics.co Feedback - '.$input->post('name'));
$mail->reply_to($input->post('email'), $input->post('name'));
	
$mail->message($input->post('message'));
$mail->send();

echo '1';