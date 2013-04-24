<?php
require_once 'PHPUnit/Autoload.php';
require_once '../dal/Customer.php';
class addCustomer
{
    public function testMethod($test)
    {
        PHPUnit_Framework_Assert::assertTrue($test, 'Falla');
    }
}

$get = new Customer();
$sample = new addCustomer;
$test = $get->addCustomer('prueba', 'prueba', 'Prueba', 'Unitaria', 'prueba@unitaria.com', '1');
$sample->testMethod($test);
?>