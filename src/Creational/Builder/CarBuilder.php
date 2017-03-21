<?php
/**
 * Created by PhpStorm.
 * User: xiyusullos
 * Date: 2017/3/21
 * Time: 19:58
 */

namespace xiyusullos\Creational\Builder;


use xiyusullos\Creational\Builder\Parts\Vehicle;

/**
 * Class CarBuilder
 * @package xiyusullos\Creational\Builder
 */
class CarBuilder implements BuilderInterface
{

    /**
     * @var Parts\Car;
     */
    private $car;

    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Parts\Wheel);
        $this->car->setPart('wheelRF', new Parts\Wheel);
        $this->car->setPart('wheelLR', new Parts\Wheel);
        $this->car->setPart('wheelRR', new Parts\Wheel);
    }

    public function addEngine()
    {
        $this->car->setPart('carEngine', new Parts\Engine);
    }

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Parts\Door);
        $this->car->setPart('leftDoor', new Parts\Door);
        $this->car->setPart('trunkDoor', new Parts\Door);
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}