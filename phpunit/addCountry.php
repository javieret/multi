<?php
require_once 'PHPUnit/Autoload.php';
require_once '../dal/Country.php';
class addCountry
{
public function testMethod($test)
{
PHPUnit_Framework_Assert::assertTrue($test, 'Falla');
}
}
$get = new Country();
$sample = new addCountry;
$test = $get->addCountry('Suecia');
$sample->testMethod($test);
?>