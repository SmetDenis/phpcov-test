<?php

require_once __DIR__ . '/../vendor/autoload.php';


$hasXDebug = extension_loaded('xdebug');

if ($hasXDebug) {

    if (class_exists('SebastianBergmann\CodeCoverage\CodeCoverage')) {
        $codeCoverage = new SebastianBergmann\CodeCoverage\CodeCoverage();
    } else {
        $codeCoverage = new PHP_CodeCoverage();
    }

    /**
     * It seems the fail is hear
     * Only PHP7 + xdebug in PHP built-in server
     * For PHP_SAPI == 'cli-server'
     */
    $codeCoverage->start('id-42', true); // <===


    require_once __DIR__ . '/included_file.php';
    $codeCoverage->stop();

} else { // clean require
    require_once __DIR__ . '/included_file.php';
}
