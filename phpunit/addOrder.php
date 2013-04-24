<?php
require_once 'PHPUnit/Autoload.php';
require_once '../dal/Order.php';
class addOrder
{
    public function testMethod($test)
    {
        PHPUnit_Framework_Assert::assertTrue($test, 'Falla');
    }
}

$get = new Order();
$sample = new addOrder;
$test = $get->addOrder('1','hola');
$sample->testMethod($test);
?>