<?php declare(strict_types = 1);

namespace Builder\Composite\Burger\Decorator;

use Builder\AbstractOrderDecorator;

/**
 * Decorator to add a slice of tomato to burger orders.
 * @author Thorsten 'stepo' Hallwas
 */
class TomatoDecorator extends AbstractOrderDecorator
{

    /**
     * Adds the information to the name.
     * @return string
     */
    public function getName(): string
    {
        return $this->order->getName().' with tomato';
    }

    /**
     * Adds 5 seconds to the preparation time.
     * @return int
     */
    public function getPreparationTime(): int
    {
        return $this->order->getPreparationTime() + 5;
    }

    /**
     * @return int
     */
    public function getKiloCalories(): int
    {
        return $this->order->getKiloCalories() + 4;
    }

}
