<?php
date_default_timezone_set('America/Bahia');           // It defines the default timezone
$internal_folder = '';                                // If the page is inside a folder, $internal_folder receives it

define('DIR_PAGE', "http://{$_SERVER['HTTP_HOST']}/{$internal_folder}");
define('ACCESS', $_SERVER['REMOTE_ADDR'] . ' ' . date(DATE_RSS, time()));

if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/')
{
	define('REQUEST_DIR', $_SERVER['DOCUMENT_ROOT'] . $internal_folder);
}
else
{
	define('REQUEST_DIR', $_SERVER['DOCUMENT_ROOT'] . '/' . $internal_folder);
}
?>
