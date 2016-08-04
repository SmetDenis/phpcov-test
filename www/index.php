<?php

use SebastianBergmann\CodeCoverage\CodeCoverage;

require_once __DIR__ . '/../vendor/autoload.php';


$codeCoverage = new CodeCoverage();

/**
 * It seems the fail is hear
 * Only PHP7 + xdebug in PHP built-in server
 * For PHP_SAPI == 'cli-server'
 */
$codeCoverage->start('id-42', true);

require_once __DIR__ . '/included_file.php';

$codeCoverage->stop();
