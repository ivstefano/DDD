<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 16/09/2015
 * Time: 08:13
 * Type: Controller
 */

class BaseController {
	public function __call($name, $arguments) {
		$subClass = new static;
		if(method_exists($subClass, $name)) {
			throw new Exception("The action $name does not exist in controller " . get_class($subClass));
		}
		$subClass->$name($arguments);
	}

	public function invokeAction($actionName, $parameters) {
		$this->$actionName($parameters);
	}
}