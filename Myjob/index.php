<?php
	define('BASEDIR',__DIR__);
	spl_autoload_register('myAutoload');
	function myAutoload($class){
		include BASEDIR.'/'.str_replace('\\','/',$class).'.php';
	}
	Core\Application::dispatcher();