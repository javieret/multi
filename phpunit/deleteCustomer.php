<?php
require_once 'PHPUnit/Autoload.php';
require_once '../dal/Customer.php';
class deleteCusomter
{
    public function testMethod($test)
    {
        PHPUnit_Framework_Assert::assertTrue($test, 'Falla');
    }
}

$get = new Customer();
$sample = new deleteCusomter;
$test = $get->deleteCusomter('30');
$test = $get->deleteCusomter('31');
$sample->testMethod($test);
?>