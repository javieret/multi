<?php
require_once 'PHPUnit/Autoload.php';
require_once '../dal/Article.php';
class addArticle
{
public function testMethod($test)
{
PHPUnit_Framework_Assert::assertTrue($test, 'Falla');
}
}
$get = new Article();
$sample = new addArticle;
$test = $get->addArticle('Producto1', '100');
$sample->testMethod($test);
?>