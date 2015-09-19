<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 18/09/2015
 * Time: 16:26
 * Type:
 */
namespace Methodology\Command\Light;

class Light {
	/**
	 * @var integer
	 */
	private $barcode;

	/**
	 * Light constructor.
	 * @param int $barcode
	 */
	public function __construct($barcode) {
		$this->barcode = $barcode;
	}

	public function turnOn() {
		echo "Light $this->barcode is on. <br />";
	}

	public function turnOff() {
		echo "Light $this->barcode is off. <br />";
	}
}
