<?php

//EBCMS Dongfig Parser

namespace EBCMS\Core;

class DongConsumer {
	public $dongfig_file = "";
	private $config;

	public function __construct($df) {
		$this->dongfig_file = $df;
	}

	public function consumeDongs() {
		if (!file_exists($this->dongfig_file)) {
			return "Fatal Error: Dongfig file does not exist!<br/>";
		}

		echo "Info: Consuming dongfig file: ". $this->dongfig_file . "<br/>";
		$this->readDongfigIntoMemory();
		return true;
	}

	public function readDongfigIntoMemory() {
		$config = file_get_contents($this->dongfig_file);
	}

	public function getDongfig($property) {
		$lines = file($this->dongfig_file);

		foreach ($lines as $line_num => $line) {
			list($key, $value) = explode('=', $line);
			if ((string)$key == $property) {
				return $value;
			}
		}
	}
}

?>