<?php declare(strict_types = 1);

namespace Builder\Composite\Burger\Decorator;

use Builder\AbstractOrderDecorator;

/**
 * Decorator to add cheese to to a burger order.
 * @author Thorsten 'stepo' Hallwas
 */
class CheeseDecorator extends AbstractOrderDecorator
{

    /**
     * Adds the information to the name.
     * @return string
     */
    public function getName(): string
    {
        return $this->order->getName().' with cheese';
    }

    /**
     * Adds 30 seconds to the preparation time.
     * @return int
     */
    public function getPreparationTime(): int
    {
        return $this->order->getPreparationTime() + 30;
    }

    /**
     * Adds 50 cent to the price.
     * @return int
     */
    public function getPrice(): int
    {
        return $this->order->getPrice() + 50;
    }

    /**
     * @return int
     */
    public function getKiloCalories(): int
    {
        return $this->order->getKiloCalories() + 89;
    }

}
