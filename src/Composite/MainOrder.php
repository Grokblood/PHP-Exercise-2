<?php declare(strict_types = 1);

namespace Builder\Composite;

use Builder\OrderInterface;
use Builder\OrderTemplate;

/**
 * Represents a main order in a restaurant.
 * @author Thorsten 'stepo' Hallwas
 */
class MainOrder extends OrderTemplate
{

    /**
     * @var array|OrderInterface[]
     */
    protected $orders = [];

    /**
     * MainOrder constructor.
     * @param string                 $customer
     * @param array|OrderInterface[] $orders
     */
    public function __construct(string $customer, $orders)
    {
        parent::__construct($customer);
        $this->orders = $orders;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        $names = [];
        foreach ($this->orders as $order) {
            $names[] = $order->getName();
        }

        return implode(', ', $names);
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        $price = 0;
        foreach ($this->orders as $order) {
            $price += $order->getPrice();
        }

        return $price;
    }

    /**
     * @return int
     */
    public function getPreparationTime(): int
    {
        $preparationTime = 0;
        foreach ($this->orders as $order) {
            $preparationTime += $order->getPreparationTime();
        }

        return $preparationTime;
    }

    /**
     * @return int
     */
    public function getKiloCalories(): int
    {
        $kiloCalories = 0;
        foreach ($this->orders as $order) {
            $kiloCalories += $order->getKiloCalories();
        }

        return $kiloCalories;
    }
}
