<?php

require_once 'string.php';
require_once("PHPUnit/Framework/TestSuite.php");

class StringTest extends PHPUnit_Framework_TestCase
{

    var $abc;

    function StringTest($name) {
       $this->PHPUnit_TestCase($name);
    }

    function setUp() {
        $this->abc = new String("1234");
    }

    function tearDown() {
        unset($this->abc);
    }

    function testToString() {
        $result = $this->abc->toString('contains %s');
        $expected = 'contains abc';
        $this->assertTrue($result == $expected);
    }

    function testCopy() {
      $abc2 = "hola";
      $this->assertEquals($abc2, $this->abc);
    }

    function testAdd() {
        $abc2 = new String('123aaaaa');
        $this->abc->add($abc2);
        $result = $this->abc->toString("%s");
        $expected = "abc123";
        $this->assertTrue($result == $expected);
    }
  }

  $sample = new Sample;
    $sample->setUp();
?>