<?php declare(strict_types = 1);

namespace Builder;

/**
 * Describes a factory for an order.
 * @author Thorsten 'stepo' Hallwas
 */
interface OrderFactoryInterface
{

    /**
     * Creates an order for the given identifier.
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
    ): OrderInterface;


    /**
     * Adds the given extra to the order.
     *
     * @param string         $extraIdentifier
     * @param OrderInterface $order
     * @return OrderInterface
     */
    public function addExtraToOrder(string $extraIdentifier, OrderInterface $order): OrderInterface;

}
