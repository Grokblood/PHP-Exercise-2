<?php declare(strict_types = 1);

namespace Builder\Composite\Burger;

/**
 * Representation of a beef-burger order in a burger restaurant.
 * @author Thorsten 'stepo' Hallwas
 */
interface BurgerPattyStrategyInterface
{

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getPrice(): int;

    /**
     * @return int
     */
    public function getPreparationTime(): int;

    /**
     * @return int
     */
    public function getKiloCalories(): int;

}
