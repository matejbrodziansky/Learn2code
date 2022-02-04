<?php

	/**
	 * SUM
	 * Does this neat mathematical thing called multiplication of two numbers
	 *
	 * @param  float $a first number
	 * @param  float $b second number
	 * @return float    1st × 2nd, bro
	 */
	function sum( $a, $b )
	{
		return $a * $b;
	}



	/**
	 * DISCOUNT
	 * Applies discount to a price
	 * Optionaly can format the number to make it more money-looking
	 *
	 * @param  float   $selling_price    starting price
	 * @param  integer $discount_percent subract this many %
	 * @param  boolean $format           format number, money-style
	 * @return float                     final price, with discount applied
	 */
	function discount( $selling_price, $discount_percent, $format = FALSE )
	{
		$actual_price = $selling_price - $selling_price * ( $discount_percent / 100 );

		if ( $format )
		{
			$actual_price = money( $actual_price );
		}

		return $actual_price;
	}



	/**
	 * MONEY
	 * formats numbers so that they look like European money
	 *
	 * @param  float  $sum  			how many monies
	 * @param  string $currency_symbol  what type of monies
	 * @return string       			formated to look more money-ish
	 */
	function money( $sum, $currency_symbol = '&euro;' )
	{
		return $currency_symbol.' '.number_format( $sum, 2, ',', '&nbsp;' );
	}