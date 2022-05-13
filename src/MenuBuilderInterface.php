<?php declare(strict_types = 1);

namespace Builder;

/**
 * Interface for menu builders.
 */
interface MenuBuilderInterface
{

    /**
     * Get the whole menu (so far).
     *
     * @return OrderInterface
     */
    public function getMenu(): OrderInterface;

    /**
     * Add a burger to the menu-
     *
     * @param OrderInterface $burger
     * @return void
     */
    public function setBurger(OrderInterface $burger): void;

    /**
     * Add a salad to the menu.
     *
     * @param OrderInterface $salad
     * @return void
     */
    public function setSalad(OrderInterface $salad): void;

    /**
     * Add fries to the menu.
     *
     * @param OrderInterface $fries
     * @return void
     */
    public function setFries(OrderInterface $fries): void;

    /**
     * @param OrderInterface $drink
     */
    public function setDrink(OrderInterface $drink): void;

}
