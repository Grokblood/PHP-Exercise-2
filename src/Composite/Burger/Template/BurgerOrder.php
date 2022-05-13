<?php declare(strict_types = 1);

namespace Builder\Composite\Burger\Template;

use Builder\OrderTemplate;
use Builder\Composite\Burger\BurgerPattyStrategyInterface;

/**
 * Representation of a beef-burger order in a burger restaurant.
 * @author Thorsten 'stepo' Hallwas
 */
class BurgerOrder extends OrderTemplate
{

    /**
     * @var BurgerPattyStrategyInterface
     */
    protected $burgerPatty;

    /**
     * BurgerOrder constructor.
     * @param string                       $customer
     * @param BurgerPattyStrategyInterface $burgerPatty
     */
    public function __construct(string $customer, BurgerPattyStrategyInterface $burgerPatty)
    {
        parent::__construct($customer);
        $this->burgerPatty = $burgerPatty;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->burgerPatty->getName() . '-Burger';
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 300 + $this->burgerPatty->getPrice();
    }

    /**
     * @return int
     */
    public function getPreparationTime(): int
    {
        return 100 + $this->burgerPatty->getPreparationTime();
    }

    /**
     * @return int
     */
    public function getKiloCalories(): int
    {
        return 200 + $this->burgerPatty->getKiloCalories();
    }

}
