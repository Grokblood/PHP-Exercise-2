<?php declare(strict_types = 1);

namespace Builder\Composite\Drink\Template;

use Builder\OrderTemplate;

/**
 * Represents an order of a lemonade.
 * @author Thorsten 'stepo' Hallwas
 */
class LemonadeOrder extends OrderTemplate
{

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Lemonade';
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 200;
    }

    /**
     * @return int
     */
    public function getPreparationTime(): int
    {
        return 5;
    }

    /**
     * @return int
     */
    public function getKiloCalories(): int
    {
        return 240;
    }
}
