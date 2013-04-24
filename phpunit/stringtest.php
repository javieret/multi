<?php

require_once 'testcase.php';
require 'PHPUnit/Autoload.php';

$suite  = new PHPUnit_TestSuite("StringTest");
$result = PHPUnit::run($suite);

echo $result -> toString();
?>