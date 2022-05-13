<?php declare(strict_types = 1);

namespace Builder\Builder;

use Builder\Composite\Burger\Factory\BurgerFactory;
use Builder\Composite\Drink\Factory\DrinkFactory;
use Builder\Composite\Fries\Factory\FriesFactory;
use Builder\Composite\Salad\Factory\SaladFactory;
use Builder\MenuBuilderInterface;
use Builder\OrderInterface;

/**
 * Directs the creation of a menu.
 */
class MenuDirector
{

    /**
     * @var BurgerFactory
     */
    protected $burgerFactory;

    /**
     * @var DrinkFactory
     */
    protected $drinkFactory;

    /**
     * @var FriesFactory
     */
    protected $friesFactory;

    /**
     * @var SaladFactory
     */
    protected $saladFactory;

    /**
     * @var MenuBuilderInterface
     */
    protected $menuBuilder;

    /**
     * MenuDirector constructor.
     * @param BurgerFactory        $burgerFactory
     * @param DrinkFactory         $drinkFactory
     * @param FriesFactory         $friesFactory
     * @param SaladFactory         $saladFactory
     * @param MenuBuilderInterface $menuBuilder
     */
    public function __construct(
        BurgerFactory $burgerFactory,
        DrinkFactory $drinkFactory,
        FriesFactory $friesFactory,
        SaladFactory $saladFactory,
        MenuBuilderInterface $menuBuilder
    ) {
        $this->burgerFactory = $burgerFactory;
        $this->drinkFactory = $drinkFactory;
        $this->friesFactory = $friesFactory;
        $this->saladFactory = $saladFactory;
        $this->menuBuilder = $menuBuilder;
    }

    /**
     * Create a new order consisting of any combination of a burger, fries, a salad and a drink.
     *
     * @param string      $customer
     * @param string|null $burger
     * @param array|null  $burgerExtras
     * @param string|null $fries
     * @param array|null  $friesExtras
     * @param string|null $salad
     * @param array|null  $saladExtras
     * @param string|null $drink
     * @param array|null  $drinkExtras
     * @return OrderInterface
     */
    public function createOrder(
        string $customer,
        ?string $burger,
        ?array $burgerExtras,
        ?string $fries,
        ?array $friesExtras,
        ?string $salad,
        ?array $saladExtras,
        ?string $drink,
        ?array $drinkExtras
    ): OrderInterface {
        if (is_string($burger)) {
            $this->menuBuilder->setBurger(
                $this->burgerFactory->createOrderForCustomer($burger, $customer, $burgerExtras)
            );
        }

        if (is_string($drink)) {
            $this->menuBuilder->setDrink(
                $this->drinkFactory->createOrderForCustomer($drink, $customer, $drinkExtras)
            );
        }

        if (is_string($fries)) {
            $this->menuBuilder->setFries(
                $this->friesFactory->createOrderForCustomer($fries, $customer, $friesExtras)
            );
        }

        if (is_string($salad)) {
            $this->menuBuilder->setSalad(
                $this->saladFactory->createOrderForCustomer($salad, $customer, $saladExtras)
            );
        }

        if (is_string($saladExtras)) {
            $this->menuBuilder->setSalad(
                $this->saladFactory->createOrderForCustomer($salad, $customer, $saladExtras)
            );
        }

        return $this->menuBuilder->getMenu();
    }

}
