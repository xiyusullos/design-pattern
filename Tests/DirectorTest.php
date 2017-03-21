<?php
/**
 * Created by PhpStorm.
 * User: xiyusullos
 * Date: 2017/3/21
 * Time: 20:04
 */

namespace xiyusullos\Tests;


use PHPUnit\Framework\TestCase;
use xiyusullos\Creational\Builder\CarBuilder;
use xiyusullos\Creational\Builder\Director;
use xiyusullos\Creational\Builder\Parts\Car;
use xiyusullos\Creational\Builder\Parts\Truck;
use xiyusullos\Creational\Builder\TruckBuilder;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }

}