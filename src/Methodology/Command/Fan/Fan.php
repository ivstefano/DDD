<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 18/09/2015
 * Time: 16:26
 * Type:
 */
namespace Methodology\Command\Fan;

class Fan {
	/**
	 * @var integer the identifying number of the fan
	 */
	private $barcode;

	/**
	 * Fan constructor.
	 * @param int $barcode
	 */
	public function __construct($barcode) {
		$this->barcode = $barcode;
	}

	public function startRotating() {
		echo "Fan {$this->barcode} is rotating <br/>";
	}

	public function stopRotating() {
		echo "Fan {$this->barcode} is not rotating <br/>";
	}
}
