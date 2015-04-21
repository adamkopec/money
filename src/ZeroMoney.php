<?php
/*
 * This file is part of the Money package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Money;

/**
 * Value Object representing zero, as 0 EUR = 0 PLN = 0 USD
 * Follows the NullObject pattern.
 *
 * @author Adam Kopeć <adam.kopec@gmail.com>
 * @package SebastianBergmann\Money
 */
final class ZeroMoney extends Money
{
    public function __construct()
    {
        $this->amount = 0;
        $this->currency = new NullCurrency();
    }

    /**
     * Returns a new Money object that represents the monetary value
     * of the sum of this Money object and another.
     *
     * @param  \SebastianBergmann\Money\Money $other
     * @return static
     * @throws \SebastianBergmann\Money\CurrencyMismatchException
     * @throws \SebastianBergmann\Money\OverflowException
     */
    public function add(Money $other)
    {
        return clone $other;
    }
}