<?php
require_once 'PHPUnit/Autoload.php';
require_once '../dal/State.php';
class addAddress
{
    public function testMethod($test)
    {
        PHPUnit_Framework_Assert::assertTrue($test, 'Falla');
    }
}

$get = new State();
$sample = new addState;
$test = $get->addState('1',"Monterrey");
$sample->testMethod($test);
?>
