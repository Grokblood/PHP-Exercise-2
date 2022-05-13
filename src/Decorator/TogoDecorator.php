<?php declare(strict_types = 1);

namespace Builder\Decorator;

use Builder\OrderInterface;
use Builder\AbstractOrderDecorator;

/**
 * Substrats the given discount from the order.
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
