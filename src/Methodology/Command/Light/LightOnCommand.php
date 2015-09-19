<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 19/09/2015
 * Time: 12:22
 * Type:
 */
namespace Methodology\Command\Light;

class LightOnCommand extends LightCommand {

	/**
	 * The concrete only action that the command has to run
	 */
	public function execute() {
		$this->light->turnOn();
	}
}
