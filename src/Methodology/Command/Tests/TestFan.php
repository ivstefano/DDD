<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 18/09/2015
 * Time: 16:30
 * Type:
 */
namespace Methodology\Command\Tests;

use Methodology\Common\Runnable;
use Methodology\Command\Fan\Fan;
use Methodology\Command\ApplianceSwitch;
use Methodology\Command\Fan\FanOnCommand;
use Methodology\Command\Fan\FanOffCommand;

class TestFan implements Runnable {
	/**
	 * Procedure that should execute when something is runnable
	 */
	public function run() {
		$fans = [];
		for($i = 0; $i < 3; $i++) {
			$fans[] = new Fan("Fan number $i");
		}

		$fanOnCommand = new FanOnCommand;
		$fanOffCommand = new FanOffCommand;
		$switch = new ApplianceSwitch($fanOnCommand, $fanOffCommand);
		foreach($fans as $fan) {
			$fanOnCommand->setFan($fan);
			$switch->turnOn();

			$fanOffCommand->setFan($fan);
			$switch->turnOff();
		}
	}
}
