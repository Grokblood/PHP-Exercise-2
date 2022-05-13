<?php declare(strict_types = 1);

namespace Builder\Composite\Fries\Factory;

use Builder\Composite\Fries\Decorator\KetchupDecorator;
use Builder\Composite\Fries\Decorator\MayonnaiseDecorator;
use Builder\Composite\Fries\Decorator\TogoDecorator;
use Builder\Composite\Fries\Template\FrenchFriesOrder;
use Builder\OrderFactoryInterface;
use Builder\OrderInterface;

/**
 * Factory to create an order of fries.
 * @author Thorsten 'stepo' Hallwas
 */
class FriesFactory implements OrderFactoryInterface
{

    /**
     * Create an order of fries.
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
            default:
                $friesOrder = new FrenchFriesOrder($customer);
        }

        if (is_array($extraIdentifiers)) {
            foreach ($extraIdentifiers as $friesExtra) {
                $friesOrder = $this->addExtraToOrder($friesExtra, $friesOrder);
            }
        }

        return $friesOrder;
    }

    /**
     * Add the given extra to an order of fries.
     *
     * @param string         $extraIdentifier
     * @param OrderInterface $order
     * @return OrderInterface
     */
    public function addExtraToOrder(string $extraIdentifier, OrderInterface $order): OrderInterface
    {
        switch ($extraIdentifier) {
            case 'ketchup':
                return new KetchupDecorator($order);
            case 'mayonnaise':
                return new MayonnaiseDecorator($order);
            case 'togo':
                return new TogoDecorator($order);            
        }

        return $order;
    }

}
