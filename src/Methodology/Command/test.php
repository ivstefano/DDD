<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 18/09/2015
 * Time: 16:34
 * Type:
 */

use Methodology\Command\Tests\TestFan;
use Methodology\Command\Tests\TestLight;

(new TestFan())->run();
(new TestLight())->run();
