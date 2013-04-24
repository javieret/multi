<?php
require_once 'PHPUnit/Autoload.php';
require_once '../dal/Customer.php';
class editCusomter
{
    public function testMethod($test)
    {
        PHPUnit_Framework_Assert::assertTrue($test, 'Falla');
    }
}

$get = new Customer();
$sample = new editCusomter;
$test = $get->editCustomer("Javier", "Esquivel", "javiereskivel@gmail.com");
$sample->testMethod($test);
?>

