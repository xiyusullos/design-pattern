<?php
/**
 * Created by PhpStorm.
 * User: xiyusullos
 * Date: 2017/3/21
 * Time: 19:42
 */

namespace xiyusullos\Creational\Builder;

use xiyusullos\Creational\Builder\Parts\Vehicle;

/**
 * Class Director
 * @package xiyusullos\Creational\Builder
 */
class Director
{

    /**
     * @param BuilderInterface $builder
     *
     * @return Vehicle
     */
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}