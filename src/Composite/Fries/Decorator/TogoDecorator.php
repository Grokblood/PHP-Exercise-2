<?php declare(strict_types = 1);

namespace Builder\Composite\Fries\Decorator;

use Builder\AbstractOrderDecorator;

/**
 * Decorator for take away order.
 * @author Thorsten 'stepo' Hallwas
 */
class TogoDecorator extends AbstractOrderDecorator
{

    /**
     * Adds the information to the name.
     * @return string
     */
    public function getName(): string
    {
        return $this->order->getName().' for take away';
    }

    /**
     * Adds 30 seconds to the preparation time.
     * @return int
     */
    public function getPreparationTime(): int
    {
        return $this->order->getPreparationTime() + 15;
    }
}
