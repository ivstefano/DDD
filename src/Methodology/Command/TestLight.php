<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 18/09/2015
 * Time: 16:30
 * Type:
 */
namespace Methodology\Command;

use Methodology\Common\Runnable;
use Methodology\Command\Light\Light;
use Methodology\Command\Light\LightOnCommand;
use Methodology\Command\Light\LightOffCommand;

class TestLight implements Runnable {
	/**
	 * Procedure that should execute when something is runnable
	 */
	public function run() {
		$lights = [];
		for($i = 0; $i < 3; $i++) {
			$lights[] = new Light("Light number $i");
		}

		$lightOnCommand = new LightOnCommand;
		$lightOffCommand = new LightOffCommand;
		$switch = new ApplianceSwitch($lightOnCommand, $lightOffCommand);
		foreach($lights as $light) {
			$lightOnCommand->setLight($light);
			$switch->turnOn();
			
			$lightOffCommand->setLight($light);
			$switch->turnOff();
		}
	}
}
