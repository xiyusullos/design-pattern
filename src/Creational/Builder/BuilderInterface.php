<?php
/**
 * Created by PhpStorm.
 * User: xiyusullos
 * Date: 2017/3/21
 * Time: 19:38
 */

namespace xiyusullos\Creational\Builder;


use xiyusullos\Creational\Builder\Parts\Vehicle;

/**
 * Interface BuilderInterface
 * @package xiyusullos\Creational\Builder
 */
interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle;
}