<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 16/09/2015
 * Time: 08:15
 * Type:
 */
class URL {
	private $controllerName;
	private $actionName;
	private $params;

	public function __construct($controllerName, $actionName, $params) {
		$this->controllerName = $controllerName . 'Controller';
		$this->actionName = $actionName . 'Action';
		$this->params = $params;
	}

	public function getAction() {
		return $this->action;
	}

	public function getParameters() {
		return $this->params;
	}

	public function getController() {
		if(!class_exist($this->controller)) {
			throw new Exception("Requested controller {$this->controller} does not exist.");
		}

		return new $this->controllerName;
	}
}