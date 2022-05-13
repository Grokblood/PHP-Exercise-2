<?php declare(strict_types = 1);

/*
 * Simple burger order software accepting a customers name and a choice of various meals.
 * @author Thorsten 'stepo' Hallwas
 */

error_reporting (1);
use Builder\Builder\MenuBuilder;
use Builder\Builder\MenuDirector;
use Builder\Composite\Burger\Factory\BurgerFactory;
use Builder\Composite\Drink\Factory\DrinkFactory;
use Builder\Composite\Fries\Factory\FriesFactory;
use Builder\Composite\Salad\Factory\SaladFactory;
use Builder\OrderInterface;

include __DIR__.'/vendor/autoload.php';
include __DIR__.'/0-framework/header.php';

$customer = $_GET['customer'] ?: '';
$burger = $_GET['burger'] ?: null;
$burgerExtras = $_GET['burgerExtras'] ?: [];
$fries = $_GET['fries'] ?: null;
$friesExtras = $_GET['friesExtras'] ?: [];
$salad = $_GET['salad'] ?: null;
$saladExtras = $_GET['saladExtras'] ?: [];
$drink = $_GET['drink'] ?: null;
$drinkExtras = $_GET['drinkExtras'] ?: [];
$togo = $_GET['togo'] ?: [];

if ($customer && ($burger || $fries || $salad || $drink || $togo)) {
    $menuDirector = new MenuDirector(
        new BurgerFactory(),
        new DrinkFactory(),
        new FriesFactory(),
        new SaladFactory(),
        new MenuBuilder($customer)
    );

    $order = $menuDirector->createOrder(
        $customer,
        $burger,
        $burgerExtras,
        $fries,
        $friesExtras,
        $salad,
        $saladExtras,
        $drink,
        $drinkExtras
    );

    printOrderSummary($order);
} else {
    include __DIR__.'/0-framework/printOrderForm.php';
}

include __DIR__.'/0-framework/footer.php';

/**
 * @param OrderInterface $order
 */
function printOrderSummary(OrderInterface $order)
{
    $orderFinishTime = getOrderFinishTime($order->getPreparationTime());
    $price = number_format($order->getPrice() / 100, 2);
    echo <<<HTML
    <p>Thank you {$order->getCustomer()}.</p>
    <p>Your {$order->getName()} will be ready at {$orderFinishTime}.</p>
    <p>It has {$order->getKiloCalories()} kcal.</p>
    <p>Please pay {$price} €.</p>
    <a href="index.php">Another Order</a>
    HTML;
}

/**
 * Formats the preparation time for the Europe/Berlin timezone.
 *
 * @param int $preparationTime
 * @return string
 */
function getOrderFinishTime(int $preparationTime)
{
    $time = time() + $preparationTime;
    $date = DateTime::createFromFormat('U', (string) $time);
    $dateTimeZone = new DateTimeZone('Europe/Berlin');
    $date->setTimezone($dateTimeZone);

    return $date->format('H:i:s');
}
