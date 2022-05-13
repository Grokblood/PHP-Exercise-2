<?php declare(strict_types = 1);

namespace Builder\Composite\Burger\Strategy;

use Builder\Composite\Burger\BurgerPattyStrategyInterface;

/**
 * Representation of a chicken burger order in a burger restaurant.
 * @author Thorsten 'stepo' Hallwas
 */
class ChickenBurgerPattyStrategy implements BurgerPattyStrategyInterface
{

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Chicken';
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 400;
    }

    /**
     * @return int
     */
    public function getPreparationTime(): int
    {
        return 100;
    }

    /**
     * @return int
     */
    public function getKiloCalories(): int
    {
        return 300;
    }

}
