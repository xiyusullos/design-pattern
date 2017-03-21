<?php

namespace xiyusullos\Creational\AbstractFactory;

/**
 * Class AbstractFactory
 * @package Xiyusullos\Creational\AbstractFactory
 */
abstract class AbstractFactory
{
    /**
     * @param string $content
     *
     * @return Text
     */
    abstract function createText(string $content): Text;
}