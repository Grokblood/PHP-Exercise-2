<?php declare(strict_types = 1);

namespace Builder\Builder;

use Builder\Composite\MainOrder;
use Builder\Decorator\DiscountDecorator;
use Builder\Decorator\TogoDecorator;
use Builder\MenuBuilderInterface;
use Builder\OrderInterface;

/**
 * Builds a menu with the given orders.
 */
class MenuBuilder implements MenuBuilderInterface
{
    /**
     * @var OrderInterface
     */
    protected $burger;

    /**
     * @var OrderInterface
     */
    protected $drink;

    /**
     * @var OrderInterface
     */
    protected $fries;

    /**
     * @var OrderInterface
     */
    protected $salad;

    /**
     * @var string
     */
    protected $customer;

    /**
     * MenuBuilder constructor.
     * @param string $customer
     */
    public function __construct(string $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return OrderInterface
     */
    public function getMenu(): OrderInterface
    {
        $menu = new MainOrder($this->customer, $this->getOrders());

        return new DiscountDecorator($menu, $this->getDiscount());
    }

    /**
     * Returns all the orders (so far) in an array.
     *
     * @return array&OrderInterface[]
     */
    protected function getOrders(): array
    {
        $orders = [];
        if ($this->burger) {
            $orders[]= $this->burger;
        }
        if ($this->drink) {
            $orders[] = $this->drink;
        }
        if ($this->fries) {
            $orders[] = $this->fries;
        }
        if ($this->salad) {
            $orders[] = $this->salad;
        }

        return $orders;
    }

    /**
     * Returns the given discount for the current menu.
     *
     * @return int
     */
    protected function getDiscount(): int
    {
        $discount = 0;
        if ($this->drink instanceof OrderInterface) {
            if ($this->fries instanceof OrderInterface) {
                $discount += 50;
            }
            if  ($this->salad instanceof OrderInterface) {
                $discount += 50;
            }
            if ($this->burger instanceof OrderInterface) {
                $discount += 50;
            }
        }

        return $discount;
    }

    /**
     * @param OrderInterface $burger
     */
    public function setBurger(OrderInterface $burger): void
    {
        $this->burger = $burger;
    }

    /**
     * @param OrderInterface $drink
     */
    public function setDrink(OrderInterface $drink): void
    {
        $this->drink = $drink;
    }

    /**
     * @param OrderInterface $fries
     */
    public function setFries(OrderInterface $fries): void
    {
        $this->fries = $fries;
    }

    /**
     * @param OrderInterface $salad
     */
    public function setSalad(OrderInterface $salad): void
    {
        $this->salad = $salad;
    }

}
