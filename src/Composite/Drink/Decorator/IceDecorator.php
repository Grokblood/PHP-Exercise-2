<?php declare(strict_types = 1);

namespace Builder\Composite\Drink\Decorator;

use Builder\AbstractOrderDecorator;

/**
 * Decorator to add ice to to a drink order.
 * @author Thorsten 'stepo' Hallwas
 */
class IceDecorator extends AbstractOrderDecorator
{

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->order->getName() . ' with ice';
    }

}
