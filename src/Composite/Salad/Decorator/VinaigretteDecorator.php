<?php declare(strict_types = 1);

namespace Builder\Composite\Salad\Decorator;

use Builder\AbstractOrderDecorator;

/**
 * Decorator to add a vinaigrette to a fries order.
 * @author Thorsten 'stepo' Hallwas
 */
class VinaigretteDecorator extends AbstractOrderDecorator
{

    /**
     * Adds the information to the name.
     * @return string
     */
    public function getName(): string
    {
        return $this->order->getName().' with vinaigrette';
    }

    /**
     * Adds 30 seconds to the preparation time.
     * @return int
     */
    public function getPreparationTime(): int
    {
        return $this->order->getPreparationTime() + 5;
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
        return $this->order->getKiloCalories() + 88;
    }

}
