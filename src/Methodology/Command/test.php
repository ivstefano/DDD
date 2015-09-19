<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 18/09/2015
 * Time: 16:34
 * Type:
 */

use Methodology\Command\TestFan;
use Methodology\Command\TestLight;

(new TestFan())->run();
(new TestLight())->run();
