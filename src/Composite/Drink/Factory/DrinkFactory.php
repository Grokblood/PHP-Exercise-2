<?php declare(strict_types = 1);

namespace Builder\Composite\Drink\Factory;

use Builder\Composite\Drink\Decorator\IceDecorator;
use Builder\Composite\Drink\Decorator\TogoDecorator;
use Builder\Composite\Drink\Template\ColaOrder;
use Builder\Composite\Drink\Template\LemonadeOrder;
use Builder\OrderFactoryInterface;
use Builder\OrderInterface;

/**
 * Factory to create an order of a drink.
 * @author Thorsten 'stepo' Hallwas
 */
class DrinkFactory implements OrderFactoryInterface
{

    /**
     * Create a new drink with the given extras.
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
            case 'cola':
                $drinkOrder = new ColaOrder($customer);
                break;
            default:
                $drinkOrder = new LemonadeOrder($customer);
        }

        if (is_array($extraIdentifiers)) {
            foreach ($extraIdentifiers as $drinkExtra) {
                $drinkOrder = $this->addExtraToOrder($drinkExtra, $drinkOrder);
            }
        }

        return $drinkOrder;
    }

    /**
     * Add the given extra to the order.
     *
     * @param string         $extraIdentifier
     * @param OrderInterface $order
     * @return OrderInterface
     */
    public function addExtraToOrder(string $extraIdentifier, OrderInterface $order): OrderInterface
    {
        switch ($extraIdentifier) {
            case 'yes':
                return new TogoDecorator($order);
            case 'togo':
                return new TogoDecorator($order);
        }

        return $order;
    }
}
