<?php declare(strict_types = 1);

namespace Builder\Decorator;

use Builder\OrderInterface;
use Builder\AbstractOrderDecorator;

/**
 * Substrats the given discount from the order.
 */
class DiscountDecorator extends AbstractOrderDecorator
{

    /**
     * @var int
     */
    protected $discount;
    

    /**
     * DiscountDecorator constructor.
     * @param OrderInterface $order
     * @param int            $discount
     */
    public function __construct(OrderInterface $order, int $discount)
    {
        parent::__construct($order);
        $this->discount = $discount;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return parent::getPrice() - $this->discount;
    }

}
