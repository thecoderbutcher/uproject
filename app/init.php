<?php 

	# Load assets
	require_once 'Core/config/Configuration.php';
	require_once 'Core/helpers/url.php';

	# Autoload
	spl_autoload_register(function($className){require_once 'Core/assets/' . $className .'.php';}); 
    
?>