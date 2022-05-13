<?php declare(strict_types = 1);

namespace Builder\Composite\Burger\Factory;

use Builder\Composite\Burger\Decorator\CheeseDecorator;
use Builder\Composite\Burger\Decorator\CucumberDecorator;
use Builder\Composite\Burger\Decorator\OnionDecorator;
use Builder\Composite\Burger\Decorator\SaladDecorator;
use Builder\Composite\Burger\Decorator\TomatoDecorator;
use Builder\Composite\Burger\Decorator\TogoDecorator;
use Builder\Composite\Burger\Strategy\BeanBurgerPattyStrategy;
use Builder\Composite\Burger\Strategy\BeefBurgerPattyStrategy;
use Builder\Composite\Burger\Strategy\ChickenBurgerPattyStrategy;
use Builder\Composite\Burger\Strategy\FishBurgerPattyStrategy;
use Builder\Composite\Burger\Strategy\SeitanBurgerPattyStrategy;
use Builder\Composite\Burger\Template\BurgerOrder;
use Builder\OrderFactoryInterface;
use Builder\OrderInterface;

/**
 * Factory to create an order of a burger.
 * @author Thorsten 'stepo' Hallwas
 */
class BurgerFactory implements OrderFactoryInterface
{

    /**
     * Create a burger order for the customer with the given extras.
     *
     * @param string     $orderIdentifier
     * @param string     $customer
     * @param array|null $extraIdentifiers
     * @return OrderInterface
     */
    public function createOrderForCustomer(
        string $orderIdentifier,
        string $customer,
        ?array $extraIdentifiers
    ): OrderInterface {
        switch ($orderIdentifier) {
            case 'bean':
                $patty = new BeanBurgerPattyStrategy();
                break;
            case 'beef':
                $patty = new BeefBurgerPattyStrategy();
                break;
            case 'chicken':
                $patty = new ChickenBurgerPattyStrategy();
                break;
            case 'fish':
                $patty = new FishBurgerPattyStrategy();
                break;
            default:
                $patty = new SeitanBurgerPattyStrategy();
        }
        $order = new BurgerOrder($customer, $patty);
        if (is_array($extraIdentifiers)) {
            foreach ($extraIdentifiers as $burgerExtra) {
                $order = $this->addExtraToOrder($burgerExtra, $order);
            }
        }

        return $order;
    }

    /**
     * Add extra to a burger order.
     *
     * @param string         $extraIdentifier
     * @param OrderInterface $order
     * @return OrderInterface
     */
    public function addExtraToOrder(string $extraIdentifier, OrderInterface $order): OrderInterface
    {
        switch ($extraIdentifier) {
            case 'cheese':
                return new CheeseDecorator($order);
            case 'cucumber':
                return new CucumberDecorator($order);
            case 'onion':
                return new OnionDecorator($order);
            case 'salad':
                return new SaladDecorator($order);
            case 'tomato':
                return new TomatoDecorator($order);
            case 'togo':
                return new TogoDecorator($order);
        }

        return $order;
    }

}
