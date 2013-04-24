<?php
require_once 'PHPUnit/Autoload.php';
require_once '../dal/Address.php';
class deleteAddress
{
    public function testMethod($test)
    {
    	echo $test;
        PHPUnit_Framework_Assert::assertTrue($test, 'Falla');
    }
}

$get = new Address();
$sample = new deleteAddress;
$test = $get->deleteAddress('91');
$sample->testMethod($test);
$test = $get->deleteAddress('100');
$sample->testMethod($test);
?>
