<?php
require_once 'PHPUnit/Autoload.php';
require_once '../dal/Article.php';
class deleteArticle
{
public function testMethod($test)
{
PHPUnit_Framework_Assert::assertTrue($test, 'Falla');
}
}
$get = new Article();
$sample = new deleteArticle;
$test = $get->deleteArticle('1');
$sample->testMethod($test);
?>