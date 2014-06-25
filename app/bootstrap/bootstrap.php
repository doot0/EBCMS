<?php

require_once(__DIR__ . '/../lib/EBCMS/Core/DongConsumer.php');

//EBCMS Bootstrapper

echo "EBCMS bootstrap process!<br/>";

echo "Parsing dongfig file...<br/>";

$dongConsumer = new \EBCMS\Core\DongConsumer(__DIR__ . '/../dongfig/sample.dongfig');


if ($dongConsumer->consumeDongs()) {
	echo "Dong consumption successful...<br/>";
} else {
	die("Dongs not consumed!");
}

//Load Routes

require_once(__DIR__ . '/../routing.php');

echo "Done bootstrap!<br/>";



?>