<?php declare(strict_types = 1);

namespace Builder\Composite\Salad\Factory;

use Builder\Composite\Salad\Decorator\VinaigretteDecorator;
use Builder\Composite\Salad\Decorator\YogurtDressingDecorator;
use Builder\Composite\Salad\Decorator\GarlicDressingDecorator;
use Builder\Composite\Salad\Decorator\TogoDecorator;
use Builder\Composite\Salad\Template\SaladOrder;
use Builder\OrderFactoryInterface;
use Builder\OrderInterface;

/**
 * Factory to create an order of a salad.
 * @author Thorsten 'stepo' Hallwas
 */
class SaladFactory implements OrderFactoryInterface
{

    /**
     * Create a order of a salad.
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
                $saladOrder = new SaladOrder($customer);
        }

        if (is_array($extraIdentifiers)) {
            foreach ($extraIdentifiers as $saladExtra) {
                $saladOrder = $this->addExtraToOrder($saladExtra, $saladOrder);
            }
        }

        return $saladOrder;
    }

    /**
     * Add the given extra to an order of salad.
     *
     * @param string         $extraIdentifier
     * @param OrderInterface $order
     * @return OrderInterface
     */
    public function addExtraToOrder(string $extraIdentifier, OrderInterface $order): OrderInterface
    {
        switch ($extraIdentifier) {
            case 'vinaigrette':
                return new VinaigretteDecorator($order);
            case 'yogurt':
                return new YogurtDressingDecorator($order);
            case 'garlic':
                return new GarlicDressingDecorator($order);
            case 'togo':
                return new TogoDecorator($order);
        }

        return $order;
    }

}
