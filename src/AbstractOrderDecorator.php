<?php declare(strict_types = 1);

namespace Builder;

/**
 * Decorator for orders in our burger-restaurant.
 * @author Thorsten 'stepo' Hallwas
 */
abstract class AbstractOrderDecorator implements OrderInterface
{

    /**
     * @var OrderInterface
     */
    protected $order;

    /**
     * AbstractOrderDecorator constructor.
     * @param OrderInterface $order
     */
    public function __construct(OrderInterface $order)
    {
        $this->order = $order;
    }

    /**
     * @return string
     */
    public function getCustomer(): string
    {
        return $this->order->getCustomer();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->order->getName();
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->order->getPrice();
    }

    /**
     * @return int
     */
    public function getPreparationTime(): int
    {
        return $this->order->getPreparationTime();
    }

    /**
     * @return int
     */
    public function getKiloCalories(): int
    {
        return $this->order->getKiloCalories();
    }
}
