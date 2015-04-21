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

class NullCurrencyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \SebastianBergmann\Money\NullCurrency::__construct
     */
    public function testCanBeConstructed()
    {
        $c = new NullCurrency();

        $this->assertInstanceOf(NullCurrency::class, $c);

        return $c;
    }
}