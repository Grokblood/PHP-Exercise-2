<?php declare(strict_types = 1);

namespace Builder\Composite\Drink\Template;

use Builder\OrderTemplate;

/**
 * Represents an order of a cola.
 * @author Thorsten 'stepo' Hallwas
 */
class ColaOrder extends OrderTemplate
{

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Cola';
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 250;
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
        return 300;
    }
}
