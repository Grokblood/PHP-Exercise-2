<?php declare(strict_types = 1);

namespace Builder\Composite\Salad\Template;

use Builder\OrderTemplate;

/**
 * Represents an order or a salad.
 * @author Thorsten 'stepo' Hallwas
 */
class SaladOrder extends OrderTemplate
{

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Salad';
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
        return 30;
    }

    /**
     * @return int
     */
    public function getKiloCalories(): int
    {
        return 150;
    }
}
