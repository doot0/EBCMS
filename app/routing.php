<?php
//EBCMS Routing
include(__DIR__ . '/helpers.php');

$requestURI = $_SERVER['REQUEST_URI'];
echo $_SERVER['REQUEST_URI'] . '<br/>';

$routes = array(
			'/app/views/admin/' => '/admin/',
		);

$site_root = $dongConsumer->getDongfig('SITEURL');


if (in_array($requestURI, $routes)) {
	echo "This URL is in Routes<br/>";
} else {
	echo "This URL not in Routes";
}

?>