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
 * Value Object representing an empty currency to be used with ZeroMoney
 * Follows the NullObject pattern.
 *
 * @author Adam Kopeć <adam.kopec@gmail.com>
 * @package SebastianBergmann\Money
 */
final class NullCurrency extends Currency
{
    /**
     * @var string
     */
    private $currencyCode;

    public function __construct()
    {
        $this->currencyCode = '';
    }

    /**
     * Returns the ISO 4217 numeric code of this currency.
     *
     * @return integer
     */
    public function getSubUnit()
    {
        return 1;
    }

    /**
     * Returns the default number of fraction digits used with this
     * currency.
     *
     * @return integer
     */
    public function getDefaultFractionDigits()
    {
        return 0;
    }
}