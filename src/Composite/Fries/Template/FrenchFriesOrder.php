<?php declare(strict_types = 1);

namespace Builder\Composite\Fries\Template;

use Builder\OrderTemplate;

/**
 * Represents an order of french fries.
 * @author Thorsten 'stepo' Hallwas
 */
class FrenchFriesOrder extends OrderTemplate
{

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'French-Fries';
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
        return 120;
    }

    /**
     * @return int
     */
    public function getKiloCalories(): int
    {
        return 480;
    }
}
