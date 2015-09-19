<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 18/09/2015
 * Time: 16:35
 * Type: Behavior
 */
namespace Methodology\Common;

interface Runnable {
	/**
	 * Procedure that should execute when something is runnable
	 */
	public function run();
}