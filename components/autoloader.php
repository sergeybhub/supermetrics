<?php
/*
 * PHP: Autoloading Classes - Manual
 * From: https://www.php.net/manual/en/language.oop5.autoload.php.
 */
class Autoloader
{
	public static function register()
	{
		spl_autoload_register(function ($class) {
		    // registers autoloaders
			$file = __DIR__.DIRECTORY_SEPARATOR.str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
			if (file_exists($file)) {
				require $file;
				return true;
			}
			return false;
		});
	}
}

Autoloader::register();