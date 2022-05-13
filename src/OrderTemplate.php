<?php declare(strict_types = 1);

namespace Builder;

/**
 * A template for a burger order
 * @author Thorsten 'stepo' Hallwas.
 */
abstract class OrderTemplate implements OrderInterface
{

    /**
     * Name of the customer.
     * @var string
     */
    protected $customer;

    /**
     * Order constructor.
     * @param string $customer
     */
    public function __construct(string $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return string
     */
    public function getCustomer(): string
    {
        return $this->customer;
    }

}
