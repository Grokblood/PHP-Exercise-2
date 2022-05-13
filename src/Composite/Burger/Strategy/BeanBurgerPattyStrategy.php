<?php declare(strict_types = 1);

namespace Builder\Composite\Burger\Strategy;

use Builder\Composite\Burger\BurgerPattyStrategyInterface;

/**
 * Representation of a vegan bean burger order in a burger restaurant.
 * @author Thorsten 'stepo' Hallwas
 */
class BeanBurgerPattyStrategy implements BurgerPattyStrategyInterface
{

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Bean';
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
        return 90;
    }

    /**
     * @return int
     */
    public function getKiloCalories(): int
    {
        return 190;
    }

}
