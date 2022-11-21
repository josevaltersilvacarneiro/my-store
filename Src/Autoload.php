<?php
spl_autoload_register(function($class_name)
{
	$path = REQUEST_DIR . '/' . str_replace('\\', '/', $class_name);

	if (file_exists($path . '.php'))
	{
		require_once($path, '.php');
	}
});
?>
