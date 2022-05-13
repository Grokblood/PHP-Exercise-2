<?php declare(strict_types = 1);

namespace Builder\Composite\Burger\Strategy;

use Builder\Composite\Burger\BurgerPattyStrategyInterface;

/**
 * Representation of a pork-burger order in a burger restaurant.
 * @author Thorsten 'stepo' Hallwas
 */
class FishBurgerPattyStrategy implements BurgerPattyStrategyInterface
{

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Fish';
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 350;
    }

    /**
     * @return int
     */
    public function getPreparationTime(): int
    {
        return 120;
    }

    /**
     * @return int
     */
    public function getKiloCalories(): int
    {
        return 250;
    }

}
