<?php
/**
 * Created by PhpStorm.
 * User: Xiyusullos
 * Date: 2017/3/21
 * Time: 18:32
 */

namespace xiyusullos\Creational\AbstractFactory;


/**
 * Class Text
 * @package Xiyusullos\Creational\AbstractFactory
 */
abstract class Text
{
    /**
     * @var string
     */
    private $text;

    /**
     * Text constructor.
     *
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

}