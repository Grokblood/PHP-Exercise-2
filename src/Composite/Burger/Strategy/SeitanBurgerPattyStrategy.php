<?php declare(strict_types = 1);

namespace Builder\Composite\Burger\Strategy;

use Builder\Composite\Burger\BurgerPattyStrategyInterface;

/**
 * Representation of a vegan-seitan-burger order in a burger restaurant.
 * @author Thorsten 'stepo' Hallwas
 */
class SeitanBurgerPattyStrategy implements BurgerPattyStrategyInterface
{

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Seitan';
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 300;
    }

    /**
     * @return int
     */
    public function getPreparationTime(): int
    {
        return 50;
    }

    /**
     * @return int
     */
    public function getKiloCalories(): int
    {
        return 280;
    }

}
