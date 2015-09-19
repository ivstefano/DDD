<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 18/09/2015
 * Time: 16:31
 * Type:
 */
namespace Methodology\Command;

class ApplianceSwitch {
	/**
	 * @var Commandable
	 */
	private $turnOnCommand;

	/**
	 * @var Commandable
	 */
	private $turnOffCommand;

	public function __construct(Commandable $turnOnCommand, Commandable $turnOffCommand) {
		$this->turnOnCommand = $turnOnCommand;
		$this->turnOffCommand = $turnOffCommand;
	}

	/**
	 * @param Commandable $turnOnCommand
	 * @return ApplianceSwitch
	 */
	public function setTurnOnCommand($turnOnCommand) {
		$this->turnOnCommand = $turnOnCommand;
		return $this;
	}

	/**
	 * @param Commandable $turnOffCommand
	 * @return ApplianceSwitch
	 */
	public function setTurnOffCommand($turnOffCommand) {
		$this->turnOffCommand = $turnOffCommand;
		return $this;
	}

	public function turnOn() {
		$this->turnOnCommand->execute();
	}

	public function turnOff() {
		$this->turnOffCommand->execute();
	}
}