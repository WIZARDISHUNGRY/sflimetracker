<?php

if (version_compare(PHP_VERSION, '5.2.1') === -1) {
    $message='PHP version 5.2.1+ required; ' . PHP_VERSION . " installed\n";
    echo "<h3>$message</h3>";
    exit($message);
}

require_once(dirname(__FILE__).'/config/ProjectConfiguration.class.php');

$app="tracker"; $env="prod"; $debug=false;
require_once(dirname(__FILE__).'/lib/initialize.php');
