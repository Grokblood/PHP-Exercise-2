<?php declare(strict_types = 1);

namespace Builder;

/**
 * Interface for orders in our restaurant.
 */
interface OrderInterface
{
    /**
     * @return string
     */
    public function getCustomer(): string;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getPrice(): int;

    /**
     * @return int
     */
    public function getPreparationTime(): int;

    /**
     * @return int
     */
    public function getKiloCalories(): int;
}
