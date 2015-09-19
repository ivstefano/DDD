<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 18/09/2015
 * Time: 16:27
 * Type:
 */
namespace Methodology\Command\Fan;

class FanOnCommand extends FanCommand {
	/**
	 * The concrete only action that the command has to run
	 */
	public function execute() {
		$this->fan->startRotating();
	}
}
