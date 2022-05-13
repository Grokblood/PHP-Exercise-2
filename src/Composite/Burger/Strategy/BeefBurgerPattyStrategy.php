<?php declare(strict_types = 1);

namespace Builder\Composite\Burger\Strategy;

use Builder\Composite\Burger\BurgerPattyStrategyInterface;

/**
 * Representation of a beef-burger order in a burger restaurant.
 * @author Thorsten 'stepo' Hallwas
 */
class BeefBurgerPattyStrategy implements BurgerPattyStrategyInterface
{

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Beef';
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 550;
    }

    /**
     * @return int
     */
    public function getPreparationTime(): int
    {
        return 200;
    }

    /**
     * @return int
     */
    public function getKiloCalories(): int
    {
        return 350;
    }

}
