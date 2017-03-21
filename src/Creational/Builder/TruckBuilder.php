<?php
/**
 * Created by PhpStorm.
 * User: xiyusullos
 * Date: 2017/3/21
 * Time: 19:47
 */

namespace xiyusullos\Creational\Builder;


use xiyusullos\Creational\Builder\Parts\Vehicle;

/**
 * Class TruckBuilder
 * @package xiyusullos\Creational\Builder
 */
class TruckBuilder implements BuilderInterface
{
    /**
     * @var Parts\Truck;
     */
    private $truck;

    public function createVehicle()
    {
        $this->truck = new Parts\Truck();
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Parts\Wheel);
        $this->truck->setPart('wheel2', new Parts\Wheel);
        $this->truck->setPart('wheel3', new Parts\Wheel);
        $this->truck->setPart('wheel4', new Parts\Wheel);
        $this->truck->setPart('wheel5', new Parts\Wheel);
        $this->truck->setPart('wheel6', new Parts\Wheel);
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Parts\Engine);
    }

    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Parts\Door);
        $this->truck->setPart('leftDoor', new  Parts\Door);
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}