<?php

namespace xiyusullos\Creational\AbstractFactory;

/**
 * Class HtmlFactory
 * @package Xiyusullos\Creational\AbstractFactory
 */
class HtmlFactory extends AbstractFactory
{
    /**
     * @param string $content
     *
     * @return Text
     */
    public function createText(string $content): Text
    {
        return new HtmlText($content);
    }
}