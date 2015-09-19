<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 18/09/2015
 * Time: 16:26
 * Type:
 */
namespace Methodology\Command;

interface Commandable {
	/**
	 * The concrete only action that the command has to run
	 */
	public function execute();
}
