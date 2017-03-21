<?php
/**
 * Created by PhpStorm.
 * User: xiyusullos
 * Date: 2017/3/21
 * Time: 18:43
 */

namespace xiyusullos\Tests;


use PHPUnit\Framework\TestCase;
use xiyusullos\Creational\AbstractFactory\HtmlFactory;
use xiyusullos\Creational\AbstractFactory\HtmlText;
use xiyusullos\Creational\AbstractFactory\JsonFactory;
use xiyusullos\Creational\AbstractFactory\JsonText;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateHtmlText()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('html');

        $this->assertInstanceOf(HtmlText::class, $text);
    }

    public function testCanCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('json');

        $this->assertInstanceOf(JsonText::class, $text);
    }
}