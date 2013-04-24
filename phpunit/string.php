<?php
require_once 'PHPUnit/Autoload.php';
require_once '../dal/Address.php';
class Test
{
    public function testMethod($test)
    {
        PHPUnit_Framework_Assert::assertTrue($test, 'Falla');
    }
}

$get = new Address();
$sample = new Test;
$test = $get->addAddress('1','1','1', 'San Jemo', 'Quetzales', '64640', '4', '1');
$sample->testMethod($test);
$test = $get->addAddress('1','1','hola', 'San Jemo', 'Quetzales', '64640', '4', '1');
$sample->testMethod($test);

?>