<?php

namespace xiyusullos\Creational\AbstractFactory;

/**
 * Class JsonFactory
 * @package Xiyusullos\Creational\AbstractFactory
 */
class JsonFactory extends AbstractFactory
{
    /**
     * @param string $content
     *
     * @return Text
     */
    public function createText(string $content): Text
    {
        return new JsonText($content);
    }
}