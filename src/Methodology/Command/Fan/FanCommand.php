<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 19/09/2015
 * Time: 12:07
 * Type:
 */
namespace Methodology\Command\Fan;

use Methodology\Command\Commandable;

abstract class FanCommand implements Commandable {
	/**
	 * @var Fan
	 */
	protected $fan;

	/**
	 * FanOffCommand constructor.
	 * @param Fan $fan
	 */
	public function __construct(Fan $fan = null) {
		$this->fan = $fan;
	}

	/**
	 * @param Fan $fan
	 * @return FanCommand
	 */
	public function setFan($fan) {
		$this->fan = $fan;
		return $this;
	}
}
