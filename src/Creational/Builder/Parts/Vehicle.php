<?php
/**
 * Created by PhpStorm.
 * User: xiyusullos
 * Date: 2017/3/21
 * Time: 19:41
 */

namespace xiyusullos\Creational\Builder\Parts;


/**
 * Class Vehicle
 * @package xiyusullos\Creational\Builder\Parts
 */
abstract class Vehicle
{
    /**
     * @var Object[]
     */
    private $data = [];

    /**
     * @param string $key
     * @param Object $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}