<?php
require_once 'PHPUnit/Autoload.php';
require_once '../dal/Address.php';
class addAddress
{
    public function testMethod($test)
    {
        PHPUnit_Framework_Assert::assertTrue($test, 'Falla');
    }
}

$get = new Address();
$sample = new addAddress;
$test = $get->addAddress('1','asdasda','qasdasd', 'Prueba', 'Prueba', '64640', '4', '1');
$sample->testMethod($test);
?>

