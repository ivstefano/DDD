<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 19/09/2015
 * Time: 12:20
 * Type:
 */
namespace Methodology\Command\Light;

use Methodology\Command\Commandable;

abstract class LightCommand implements Commandable {
	/**
	 * @var Light
	 */
	protected $light;

	/**
	 * LightCommand constructor.
	 * @param Light $light
	 */
	public function __construct(Light $light = null) {
		$this->light = $light;
	}

	/**
	 * @param Light $light
	 * @return LightCommand
	 */
	public function setLight($light) {
		$this->light = $light;
		return $this;
	}
}
